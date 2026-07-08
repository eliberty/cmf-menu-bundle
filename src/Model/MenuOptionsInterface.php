<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2017 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\MenuBundle\Model;

use Knp\Menu\NodeInterface;

/**
 * Provide access to read and write the menu options.
 *
 * @author Mojtaba Koosej <mkoosej@gmail.com>
 */
interface MenuOptionsInterface extends NodeInterface
{
    /**
     * Whether or not to display this menu.
     */
    public function getDisplay(): bool;

    /**
     * Set whether or not this menu should be displayed.
     *
     *
     * @return MenuOptionsInterface
     */
    public function setDisplay(bool $bool): NodeInterface;

    /**
     * Whether or not this menu should show its children.
     */
    public function getDisplayChildren(): bool;

    /**
     * Set whether or not this menu should show its children.
     *
     *
     * @return MenuOptionsInterface
     */
    public function setDisplayChildren(bool $bool): NodeInterface;

    /**
     * Return the attributes associated with this menu node.
     */
    public function getAttributes(): array;

    /**
     * Set the attributes associated with this menu node.
     *
     * @param $attributes array
     *
     * @return MenuOptionsInterface The item to provide a fluent interface
     */
    public function setAttributes(array $attributes): NodeInterface;

    /**
     * Return the given attribute, optionally specifying a default value.
     *
     * @param string $name    The name of the attribute to return
     * @param string $default The value to return if the attribute doesn't exist
     */
    public function getAttribute(string $name, ?string $default = null): string;

    /**
     * Set the named attribute.
     *
     * @param string $name  attribute name
     * @param string $value attribute value
     *
     * @return MenuOptionsInterface The item to provide a fluent interface
     */
    public function setAttribute(string $name, string $value): NodeInterface;

    /**
     * Get the link HTML attributes.
     */
    public function getLinkAttributes(): array;

    /**
     * Set the link HTML attributes as associative array.
     *
     *
     * @return MenuOptionsInterface The item to provide a fluent interface
     */
    public function setLinkAttributes(array $linkAttributes): NodeInterface;

    /**
     * Return the children attributes.
     */
    public function getChildrenAttributes(): array;

    /**
     * Set the children attributes.
     *
     *
     * @return MenuOptionsInterface The item to provide a fluent interface
     */
    public function setChildrenAttributes(array $childrenAttributes): NodeInterface;

    /**
     * Get the label HTML attributes.
     */
    public function getLabelAttributes(): array;

    /**
     * Set the label HTML attributes as associative array.
     *
     *
     * @return MenuOptionsInterface The item to provide a fluent interface
     */
    public function setLabelAttributes(array $labelAttributes): NodeInterface;
}
