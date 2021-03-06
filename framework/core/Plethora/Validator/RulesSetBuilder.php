<?php

namespace Plethora\Validator;

/**
 * @author         Krzysztof Trzos
 * @package        Plethora
 * @subpackage     Validator
 * @since          1.0.0-alpha
 * @version        1.0.0-alpha
 */
class RulesSetBuilder {

    /**
     * @access    private
     * @var        array
     * @since     1.0.0-alpha
     */
    private $aRules = [];

    /**
     * Array of tips generated by rules set builders.
     *
     * @access  private
     * @var     array
     * @since   1.0.0-alpha
     */
    private $aTips = [];

    /**
     * Factory static method.
     *
     * @static
     * @access   public
     * @return   RulesSetBuilder
     * @since    1.0.0-alpha
     * @version  1.0.0-alpha
     */
    public static function factory() {
        return new RulesSetBuilder();
    }

    /**
     * Add new rule.
     *
     * @access   public
     * @param    array $aRule
     * @return   RulesSetBuilder
     * @since    1.0.0-alpha
     * @version  1.0.0-alpha
     */
    public function addRule(array $aRule) {
        $this->aRules[] = $aRule;

        return $this;
    }

    /**
     * Return list of validation rules.
     *
     * @access     public
     * @return    array
     * @since      1.0.0-alpha
     * @version    1.0.0-alpha
     */
    public function getRules() {
        return $this->aRules;
    }

    /**
     * This method creates "notEmpty" rule.
     *
     * @access  public
     * @param   string $string
     * @return  $this
     * @since   1.0.0-alpha
     * @version 1.0.0-alpha
     */
    public function notEmpty($string) {
        return $this;
    }

    /**
     * Add new form field tip.
     *
     * @access     protected
     * @param    string $sValue
     * @return    RulesSetBuilder
     * @since      1.0.0-alpha
     * @version    1.0.0-alpha
     */
    protected function addTip($sValue) {
        $this->aTips[] = $sValue;

        return $this;
    }

    /**
     * Get the whole array of tips for particular set builder.
     *
     * @access     public
     * @return    array
     * @since      1.0.0-alpha
     * @version    1.0.0-alpha
     */
    public function getTips() {
        return $this->aTips;
    }
}