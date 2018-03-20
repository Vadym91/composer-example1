<?php

namespace  parser\tagparser;

/**
 *
 * @author Vadim
 */

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface ParserInterface {
    /**
     * 
     * @param string $url
     * @param string $tag
     * @return string array
     */
    public function procees (string $url, string $tag) : array;
}
