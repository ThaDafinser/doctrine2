<?php
namespace Doctrine\Tests\Models\DDC3406;

/**
 * @Entity
 */
class DDC3406User
{

    /**
     * @Id
     * @OneToOne(targetEntity="DDC3406PAddress", inversedBy="user", fetch="EAGER")
     * @JoinColumn(name="sysAddress_addId", referencedColumnName="addId")
     *
     * @var DDC3406PAddress
     */
    protected $address;

    public function getAddress()
    {
        return $this->address;
    }
}
