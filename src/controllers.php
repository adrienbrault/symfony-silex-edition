<?php

$kernel->get('/adrien', function () {
    return 'Hello!';
});

$kernel->get('/say/{message}', function ($message) use ($kernel) {
    return $kernel['templating']->renderResponse('about.twig', array('message' => $message));
});
