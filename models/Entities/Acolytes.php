<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Acolytes
 *
 * @ORM\Table(name="acolytes", indexes={@ORM\Index(name="fk_recherches_has_recherches_recherches1_idx", columns={"recherches_id_r"}), @ORM\Index(name="fk_recherches_has_recherches_recherches2_idx", columns={"recherches_id_r1"})})
 * @ORM\Entity
 */
class Acolytes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_a", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idA;

    /**
     * @var bool
     *
     * @ORM\Column(name="coopere", type="boolean", nullable=false)
     */
    private $coopere;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="date", nullable=true)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_by", type="string", length=255, nullable=true)
     */
    private $createdBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="date", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="updated_by", type="string", length=255, nullable=true)
     */
    private $updatedBy;

    /**
     * @var \Recherches
     *
     * @ORM\ManyToOne(targetEntity="Recherches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recherches_id_r", referencedColumnName="id_r")
     * })
     */
    private $recherchesIdR;

    /**
     * @var \Recherches
     *
     * @ORM\ManyToOne(targetEntity="Recherches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recherches_id_r1", referencedColumnName="id_r")
     * })
     */
    private $recherchesIdR1;



    /**
     * Get idA.
     *
     * @return int
     */
    public function getIdA()
    {
        return $this->idA;
    }

    /**
     * Set coopere.
     *
     * @param bool $coopere
     *
     * @return Acolytes
     */
    public function setCoopere($coopere)
    {
        $this->coopere = $coopere;

        return $this;
    }

    /**
     * Get coopere.
     *
     * @return bool
     */
    public function getCoopere()
    {
        return $this->coopere;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return Acolytes
     */
    public function setCreatedAt($createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdBy.
     *
     * @param string|null $createdBy
     *
     * @return Acolytes
     */
    public function setCreatedBy($createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy.
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return Acolytes
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set updatedBy.
     *
     * @param string|null $updatedBy
     *
     * @return Acolytes
     */
    public function setUpdatedBy($updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy.
     *
     * @return string|null
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set recherchesIdR.
     *
     * @param \Recherches|null $recherchesIdR
     *
     * @return Acolytes
     */
    public function setRecherchesIdR(\Recherches $recherchesIdR = null)
    {
        $this->recherchesIdR = $recherchesIdR;

        return $this;
    }

    /**
     * Get recherchesIdR.
     *
     * @return \Recherches|null
     */
    public function getRecherchesIdR()
    {
        return $this->recherchesIdR;
    }

    /**
     * Set recherchesIdR1.
     *
     * @param \Recherches|null $recherchesIdR1
     *
     * @return Acolytes
     */
    public function setRecherchesIdR1(\Recherches $recherchesIdR1 = null)
    {
        $this->recherchesIdR1 = $recherchesIdR1;

        return $this;
    }

    /**
     * Get recherchesIdR1.
     *
     * @return \Recherches|null
     */
    public function getRecherchesIdR1()
    {
        return $this->recherchesIdR1;
    }
}
