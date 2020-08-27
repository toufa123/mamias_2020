<?php

declare(strict_types=1);

namespace KunicMarko\SonataAnnotationBundle\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD"})
 *
 * @author Marko Kunic <kunicmarko20@gmail.com>
 */
class ExportField implements AnnotationInterface
{
    /**
     * @var string
     */
    public $label;
}
