<?php

class Post
{
  private $title;
  private $content;

  public function __construct(string $title, string $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function getContent(): string
  {
    return $this->content;
  }
}

trait BoldText
{
  public function bold(string $word): string
  {
    return sprintf('<b>%s</b>', $word);
  }
}

trait ItalicText
{
  public function italic(string $word): string
  {
    return sprintf('<i>%s</i>', $word);
  }
}

class PostMutator
{
  use BoldText;
  use ItalicText;

  private $post;

  public function __construct(Post $post)
  {
    $this->post = $post;
  }

  public function boldItalicTitle(): string
  {
    return $this->italic($this->bold($this->post->getTitle()));
  }
}

$postMutator = new PostMutator(new Post('Judul', 'Ini contohcontent dari berita.'));
echo $postMutator->boldItalicTitle();
