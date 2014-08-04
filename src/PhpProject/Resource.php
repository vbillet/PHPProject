<?php
/**
 * This file is part of PHPProject - A pure PHP library for reading and writing
 * presentations documents.
 *
 * PHPProject is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPProject
 * @copyright   2009-2014 PHPProject contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpProject;

/**
 * PHPProject_Resource
 *
 * @category    PHPProject
 * @package        PHPProject
 * @copyright    Copyright (c) 2012 - 2012 PHPProject (https://github.com/PHPOffice/PHPProject)
 */
class Resource
{
    /**
     * Title
     * 
     * @var string
     */
    private $title;
    
    /**
     * Parent Project
     * 
     * @var PHPProject
     */
    private $parent;
    
    /**
     * Index
     * 
     * @var integer
     */
    private $index;
    
    public function __construct(PhpProject $pParent, $pIndex)
    {
        $this->parent = $pParent;
        $this->index = $pIndex;
    }
    
    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Set title
     *
     * @param string $pTitle Title of the resource
     * @return PHPProject_Resource
     */
    public function setTitle($pTitle)
    {
        $this->title = $pTitle;
        return $this;
    }
    
    /**
     * Get index
     *
     * @return index
     */
    public function getIndex()
    {
        return $this->index;
    }
    
    /**
     * Get parent
     *
     * @return PHPProject
     */
    public function getParent()
    {
        return $this->parent;
    }
}
