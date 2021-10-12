<?php

namespace Atexo\JobQueueBundle\Twig;

interface LinkGeneratorInterface
{
    function supports($entity);
    function generate($entity);
    function getLinkname($entity);
}