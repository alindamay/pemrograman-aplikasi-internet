<?php
//filename: src/Controller/Controller.php
namespace ModernFramework\Controller;

use ModernFramework\Application;
use ModernFramework\Model\Model;
use ModernFramework\View\View;
use ModernFramework\Util\Database;
use Symfony\Component\HttpFoundation\Response;

abstract class Controller
{
  private $connection;
  private $template;

  public function __construct()
  {
    $this->template = new View(Application::BASE_PATH . 'template', Application::BASE_PATH . 'cache');
  }
  public function setConnection(Database $connection): void
  {
    $this->connection = $connection;
  }
  protected function getConnection(): Database
  {
    return $this->connection;
  }
  protected function getModel(string $model): Model
  {
    return new $model($this->connection);
  }
  protected function render(string $template, array $variables = []): Response
  {
    return $this->template->render($template, $variables);
  }
}
