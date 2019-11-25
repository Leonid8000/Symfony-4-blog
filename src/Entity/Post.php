<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Symfony\Component\Validator\Constraints as Assert;

use App\Entity\Category;
use App\Entity\Tag;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

//    /**
//     * @var DateTime $created
//     *
//     * @ORM\Column(name="created_at", type="datetime", nullable=false)
//     */
//    protected $createdAt;

//Category relationship
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", inversedBy="posts")
     */
    private $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->tags = new ArrayCollection();
        $this->coments = new ArrayCollection();
    }

    /**
     * @return Collection|Post[]
     */
    public function getCategory(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->addPost($this);
        }
        return $this;
    }
    public function removeCategory(Category $category): self
    {
        if ($this->categories->contains($category)) {
            $this->categories->removeElement($category);
        }
        return $this;
    }
//Tag relationship
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tag", inversedBy="posts")
     */
    public $tags;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Coment", mappedBy="post", fetch="EXTRA_LAZY")
     */
    private $coments;

    /**
     * @return Collection|Post[]
     */
    public function getTag(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
            $tag->addPost($this);
        }
        return $this;
    }
    public function removeTag(Tag $tag): self
    {
        if ($this->tags->contains($tag)) {
            $this->tags->removeElement($tag);
        }
        return $this;
    }
//-------------------------------------------------
    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
{
    $this->description = $description;

    return $this;
}

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

// Coment get set add
    /**
     * @return Collection|Coment[]
     */
    public function getComents(): Collection
    {
        return $this->coments;
    }

    public function addComent(Coment $coment): self
    {
        if (!$this->coments->contains($coment)) {
            $this->coments[] = $coment;
            $coment->setPost($this);
        }

        return $this;
    }

    public function removeComent(Coment $coment): self
    {
        if ($this->coments->contains($coment)) {
            $this->coments->removeElement($coment);
            // set the owning side to null (unless already changed)
            if ($coment->getPost() === $this) {
                $coment->setPost(null);
            }
        }

        return $this;
    }

//    public function getCreatedAt() :?DateTime
//    {
//        return $this->createdAt;
//    }
//
//    public function setCreatedAt(DateTime $createdAt): self
//{
//    $this->createdAt = $createdAt;
//    return $this;
//}
//
//    public function getPublishedAt(): \DateTimeInterface
//    {
//        return $this->publishedAt;
//    }
//
//    public function setPublishedAt(\DateTimeInterface $publishedAt): self
//    {
//        $this->publishedAt = $publishedAt;
//
//        return $this;
//    }
//
//    /**
//     * @ORM\Column(type="datetime", nullable=true)
//     */
//    private $publishedAt;
}
