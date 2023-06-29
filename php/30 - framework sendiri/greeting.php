<?php
//filename: greeting.php

$response->setContent(sprintf('Selamat Datang, %s', $request->get('nama')));
