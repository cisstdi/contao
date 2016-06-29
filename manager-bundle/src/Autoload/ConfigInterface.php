<?php

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\ManagerBundle\Autoload;

/**
 * Autoload configuration interface
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
interface ConfigInterface
{
    /**
     * Returns the class
     *
     * @return string The class
     */
    public function getClass();

    /**
     * Sets the class name
     *
     * @param string $class The class name
     *
     * @return $this The object instance
     */
    public function setClass($class);

    /**
     * Returns the name
     *
     * @return string The name
     */
    public function getName();

    /**
     * Returns the replaces
     *
     * @return array The replace
     */
    public function getReplace();

    /**
     * Sets the replaces
     *
     * @param array $replace The replaces
     *
     * @return $this The object instance
     */
    public function setReplace(array $replace);

    /**
     * Returns the environments
     *
     * @return array The environments
     */
    public function getEnvironments();

    /**
     * Sets the environments
     *
     * @param array $environments The environments
     *
     * @return $this The object instance
     */
    public function setEnvironments(array $environments);

    /**
     * Returns the "load after" bundles
     *
     * @return array The "load after" bundles
     */
    public function getLoadAfter();

    /**
     * Sets the "load after" bundles
     *
     * @param array $loadAfter The "load after" bundles
     *
     * @return $this The object instance
     */
    public function setLoadAfter(array $loadAfter);
}
