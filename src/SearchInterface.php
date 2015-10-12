<?php
/**
 * Created by PhpStorm.
 * User: johan
 * Date: 15-10-12
 * Time: 14:50
 */

namespace Vinnia\SocialSearch;


interface SearchInterface {

    /**
     * @param string $tag
     * @return Media[]
     */
    public function searchByTag($tag);

    /**
     * @param string $username
     * @return Media[]
     */
    public function searchByUsername($username);

}
