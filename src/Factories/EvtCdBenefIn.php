<?php

namespace NFePHP\eSocial\Factories;

/**
 * Class eSocial EvtCdBenefIn Event S-2400 constructor
 * Read for S 1.0 or greater
 *
 * @category  library
 * @package   NFePHP\eSocial
 * @copyright NFePHP Copyright (c) 2017
 * @license   http://www.gnu.org/licenses/lgpl.txt LGPLv3+
 * @license   https://opensource.org/licenses/MIT MIT
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @author    Roberto L. Machado <linux.rlm at gmail dot com>
 * @link      http://github.com/nfephp-org/sped-esocial for the canonical source repository
 */

use NFePHP\Common\Certificate;
use NFePHP\eSocial\Common\Factory;
use NFePHP\eSocial\Common\FactoryId;
use NFePHP\eSocial\Common\FactoryInterface;
use stdClass;

class EvtCdBenefIn extends Factory implements FactoryInterface
{
    /**
     * @var int
     */
    public $sequencial;
    /**
     * @var string
     */
    protected $evtName = 'evtCdBenefIn'; //evtCdBenefIn na versão S.1.0
    /**
     * @var string
     */
    protected $evtAlias = 'S-2400';
    /**
     * Parameters patterns
     *
     * @var array
     */
    protected $parameters = [];

    //Trait que contêm os métodos construtores das versões diferentes ainda ativas
    //quando uma versão for desativada o metodo correspondente pode e deve ser removido
    use Traits\TraitS2400;

    /**
     * Constructor
     *
     * @param string $config
     * @param stdClass $std
     * @param Certificate $certificate | null
     * @param string $date
     */
    public function __construct(
        $config,
        stdClass $std,
        Certificate $certificate = null,
        $date = ''
    ) {
        parent::__construct($config, $std, $certificate, $date);
    }
}
