<?php

namespace Illuminate\Contracts\Support;

interface Bag extends Arrayable
{
    /**
     * Get the keys present in the bag.
     *
     * @return array
     */
    public function keys();

    /**
     * Merge a new array of items into the bag.
     *
     * @param  mixed  $items
     * @return $this
     */
    public function merge($items);

    /**
     * Determine if an item exists for a given key.
     *
     * @param  string|array  $key
     * @return bool
     */
    public function has($key);

    /**
     * Get the first item from the bag for a given key.
     *
     * @param  string  $key
     * @param  string  $format
     * @return string
     */
//    public function first($key = null, $format = null);

    /**
     * Get an item from the bag by key.
     *
     * @param  string  $key
     * @param  string  $default
     * @return array
     */
    public function get($key, $default = null);

    /**
     * Get all items in the bag.
     *
     * @return array
     */
    public function all();

    /**
     * Determine if the bag has any items.
     *
     * @return bool
     */
    public function isEmpty();

    /**
     * Get the number of items in the bag.
     *
     * @return int
     */
    public function count();

    /**
     * Get the items with the specified keys.
     *
     * @param  mixed  $keys
     * @return static
     */
    public function only($keys);

    /**
     * Get all items except for those with the specified keys.
     *
     * @param  mixed  $keys
     * @return static
     */
    public function except($keys);

    /**
     * Remove an item from the bag by key.
     *
     * @param  string|array  $keys
     * @return $this
     */
//    public function forget($keys);
}
