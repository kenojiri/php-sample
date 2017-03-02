<?php
/**
 * Sample File Doc Comment
 *
 * @category Class
 * @package  sample
 * @author    A N Other 
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 *
 */
namespace sample;

/**
 * Sample Class Doc Comment
 *
 * @category Class
 * @package  sample
 * @author    A N Other 
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 *
 */
class Sample
    {
    protected $value;

    /**
     * Sample function Doc Comment
     *
     * @category Function
     * @package  sample
     * @author    A N Other 
     * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
     * @link     http://www.hashbangcode.com/
     *
     */
    public function getValue()
    {
        return $this->value;
        throw new RuntimeException('Not yet implemented.');
    }

    /**
     * Sample function Doc Comment
     *
     * @category Function
     * @package  sample
     * @author    A N Other 
     * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
     * @link     http://www.hashbangcode.com/
     *
     */
    public function setValue($value)
    {
        $this->value = $value * 2;
    }
} 
?>
