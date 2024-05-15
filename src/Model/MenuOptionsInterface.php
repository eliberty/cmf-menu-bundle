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
     *
     * @return bool
     */
    public function getDisplay(): bool;

    /**
     * Set whether or not this menu should be displayed.
     *
     * @param bool $bool
     *
     * @return MenuOptionsInterface
     */
    public function setDisplay($bool): NodeInterface;

    /**
     * Whether or not this menu should show its children.
     *
     * @return bool
     */
    public function getDisplayChildren(): bool;

    /**
     * Set whether or not this menu should show its children.
     *
     * @param bool $bool
     *
     * @return MenuOptionsInterface
     */
    public function setDisplayChildren($bool): NodeInterface;

    /**
     * Return the attributes associated with this menu node.
     *
     * @return array
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
     *
     * @return string
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
    public function setAttribute($name, $value): NodeInterface;

    /**
     * Get the link HTML attributes.
     *
     * @return array
     */
    public function getLinkAttributes(): array;

    /**
     * Set the link HTML attributes as associative array.
     *
     * @param array $linkAttributes
     *
     * @return MenuOptionsInterface The item to provide a fluent interface
     */
    public function setLinkAttributes($linkAttributes): NodeInterface;

    /**
     * Return the children attributes.
     *
     * @return array
     */
    public function getChildrenAttributes(): array;

    /**
     * Set the children attributes.
     *
     * @param array $childrenAttributes
     *
     * @return MenuOptionsInterface The item to provide a fluent interface
     */
    public function setChildrenAttributes(array $childrenAttributes): NodeInterface;

    /**
     * Get the label HTML attributes.
     *
     * @return array
     */
    public function getLabelAttributes(): array;

    /**
     * Set the label HTML attributes as associative array.
     *
     * @param array $labelAttributes
     *
     * @return MenuOptionsInterface The item to provide a fluent interface
     */
    public function setLabelAttributes($labelAttributes): NodeInterface;
}
