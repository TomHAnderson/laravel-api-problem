<?php

declare(strict_types=1);

namespace ApiSkeletons\Laravel\ApiProblem\Exception;

use Traversable;

class DomainException extends \DomainException implements
    ExceptionInterface,
    ProblemExceptionInterface
{
    protected ?string $type = null;

    /** @var string[] */
    protected array $details = [];

    protected ?string $title = null;

    /**
     * @param string[] $details
     */
    public function setAdditionalDetails(array $details): self
    {
        $this->details = $details;

        return $this;
    }

    public function setType(string $uri): self
    {
        $this->type = (string) $uri;

        return $this;
    }

    public function setTitle(string $title): self
    {
        $this->title = (string) $title;

        return $this;
    }

    public function getAdditionalDetails(): Traversable|array|null
    {
        return $this->details;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }
}
