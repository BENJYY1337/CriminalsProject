<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Signalements
 *
 * @ORM\Table(name="signalements", indexes={@ORM\Index(name="fk_temoignages_has_recherches_recherches1_idx", columns={"recherches_id_r"}), @ORM\Index(name="fk_temoignages_has_recherches_temoignages1_idx", columns={"temoignages_id_temoignage"})})
 * @ORM\Entity
 */
class Signalements
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_s", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idS;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=255, nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="date", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=255, nullable=false)
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
     * @var \Temoignages
     *
     * @ORM\ManyToOne(targetEntity="Temoignages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="temoignages_id_temoignage", referencedColumnName="id_temoignage")
     * })
     */
    private $temoignagesIdTemoignage;



    /**
     * Get idS.
     *
     * @return int
     */
    public function getIdS()
    {
        return $this->idS;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Signalements
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdBy.
     *
     * @param string $createdBy
     *
     * @return Signalements
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy.
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Signalements
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set updatedBy.
     *
     * @param string $updatedBy
     *
     * @return Signalements
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy.
     *
     * @return string
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
     * @return Signalements
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
     * Set temoignagesIdTemoignage.
     *
     * @param \Temoignages|null $temoignagesIdTemoignage
     *
     * @return Signalements
     */
    public function setTemoignagesIdTemoignage(\Temoignages $temoignagesIdTemoignage = null)
    {
        $this->temoignagesIdTemoignage = $temoignagesIdTemoignage;

        return $this;
    }

    /**
     * Get temoignagesIdTemoignage.
     *
     * @return \Temoignages|null
     */
    public function getTemoignagesIdTemoignage()
    {
        return $this->temoignagesIdTemoignage;
    }
}
