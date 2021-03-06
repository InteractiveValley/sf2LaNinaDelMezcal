<?php

namespace Richpolis\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Mensajes
 *
 * @ORM\Table(name="botellas_mensajes")
 * @ORM\Entity(repositoryClass="Richpolis\FrontendBundle\Repository\MensajesRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Mensajes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo_es", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $tituloEs;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titulo_en", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $tituloEn;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje_es", type="text",nullable=true)
     */
    private $mensajeEs;
    
    /**
     * @var string
     *
     * @ORM\Column(name="mensaje_en", type="text",nullable=true)
     */
    private $mensajeEn;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255, nullable=true)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="clase", type="string", length=100, nullable=true)
     */
    private $clase;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=255, nullable=true)
     */
    private $style;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_how_to_mix", type="boolean",nullable=false)
     */
    private $isHowToMix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean",nullable=false)
     */
    private $isActive;

    /**
     * @var \Botellas
     *
     * @ORM\ManyToOne(targetEntity="Botellas", inversedBy="mensajes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="botella_id", referencedColumnName="id")
     * })
     */
    private $botella;


    public function __construct() {
        $this->isActive=true;
        $this->isHowToMix=false;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo, segun el locale de la aplicacion
     * @return Mensajes
     */
    public function setTitulo($locale,$titulo)
    {
        if($locale == "es"){
            $this->tituloEs = $titulo;
        }else{
            $this->tituloEn = $titulo;
        }
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo($locale)
    {
        if($locale == "es"){
            return $this->tituloEs;
        }else{
            return $this->tituloEn;
        }
    }

    /**
     * Set mensaje, segun el locale de la aplicacion
     *
     * @param string $mensaje
     * @return Mensajes
     */
    public function setMensaje($locale,$mensaje)
    {
        if($locale == "es"){
            $this->mensajeEs = $mensaje;
        }else{
            $this->mensajeEn = $mensaje;
        }
        return $this;
    }

    /**
     * Get mensaje, segun el locale de la aplicacion
     *
     * @return string 
     */
    public function getMensaje($locale)
    {
        if($locale == "es"){
            return $this->mensajeEs;
        }else{
            return $this->mensajeEn;
        }
        
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Mensajes
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set clase
     *
     * @param string $clase
     * @return Mensajes
     */
    public function setClase($clase)
    {
        $this->clase = $clase;
    
        return $this;
    }

    /**
     * Get clase
     *
     * @return string 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set style
     *
     * @param string $style
     * @return Mensajes
     */
    public function setStyle($style)
    {
        $this->style = $style;
    
        return $this;
    }

    /**
     * Get style
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set isHowToMix
     *
     * @param boolean $isHowToMix
     * @return Mensajes
     */
    public function setIsHowToMix($isHowToMix)
    {
        $this->isHowToMix = $isHowToMix;
    
        return $this;
    }

    /**
     * Get isHowToMix
     *
     * @return boolean 
     */
    public function getIsHowToMix()
    {
        return $this->isHowToMix;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Mensajes
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set botella
     *
     * @param \Richpolis\FrontendBundle\Entity\Botellas $botella
     * @return Mensajes
     */
    public function setBotella(\Richpolis\FrontendBundle\Entity\Botellas $botella = null)
    {
        $this->botella = $botella;
    
        return $this;
    }

    /**
     * Get botella
     *
     * @return \Richpolis\FrontendBundle\Entity\Botellas 
     */
    public function getBotella()
    {
        return $this->botella;
    }
    
    /*** uploads ***/
    
    public $file;
    
   /**
    * @ORM\PrePersist
    * @ORM\PreUpdate
    */
    public function preUpload()
    {
      if (null !== $this->file) {
        // do whatever you want to generate a unique name
        $this->imagen       =   uniqid().'.'.$this->file->guessExtension();
      }
    }

    /**
    * @ORM\PostPersist
    * @ORM\PostUpdate
    */
    public function upload()
    {
      if (null === $this->file) {
        return;
      }

      // if there is an error when moving the file, an exception will
      // be automatically thrown by move(). This will properly prevent
      // the entity from being persisted to the database on error
      $this->file->move($this->getUploadRootDir(), $this->imagen);

      unset($this->file);
    }

    /**
    * @ORM\PostRemove
    */
    public function removeUpload()
    {
      if ($file = $this->getAbsolutePath()) {
        if(file_exists($file)){
            unlink($file);
        }
      }
    }
    
    protected function getUploadDir()
    {
        return '/uploads/botellas';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web'.$this->getUploadDir();
    }
    
    public function getWebPath()
    {
       return null === $this->imagen ? null : $this->getUploadDir().'/'.$this->imagen;
    }
    
    public function getAbsolutePath()
    {
        return null === $this->imagen ? null : $this->getUploadRootDir().'/'.$this->imagen;
    }

    /**
     * Set tituloEs
     *
     * @param string $tituloEs
     * @return Mensajes
     */
    public function setTituloEs($tituloEs)
    {
        $this->tituloEs = $tituloEs;

        return $this;
    }

    /**
     * Get tituloEs
     *
     * @return string 
     */
    public function getTituloEs()
    {
        return $this->tituloEs;
    }

    /**
     * Set tituloEn
     *
     * @param string $tituloEn
     * @return Mensajes
     */
    public function setTituloEn($tituloEn)
    {
        $this->tituloEn = $tituloEn;

        return $this;
    }

    /**
     * Get tituloEn
     *
     * @return string 
     */
    public function getTituloEn()
    {
        return $this->tituloEn;
    }

    /**
     * Set mensajeEs
     *
     * @param string $mensajeEs
     * @return Mensajes
     */
    public function setMensajeEs($mensajeEs)
    {
        $this->mensajeEs = $mensajeEs;

        return $this;
    }

    /**
     * Get mensajeEs
     *
     * @return string 
     */
    public function getMensajeEs()
    {
        return $this->mensajeEs;
    }

    /**
     * Set mensajeEn
     *
     * @param string $mensajeEn
     * @return Mensajes
     */
    public function setMensajeEn($mensajeEn)
    {
        $this->mensajeEn = $mensajeEn;

        return $this;
    }

    /**
     * Get mensajeEn
     *
     * @return string 
     */
    public function getMensajeEn()
    {
        return $this->mensajeEn;
    }
}
