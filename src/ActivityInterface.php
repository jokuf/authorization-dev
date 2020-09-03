<?php

namespace Jokuf\Contract\Authorization;

interface ActivityInterface
{
    /**
     * @param int $id
     * @return mixed
     */
    public function setId(int $id);
    /**
     * @return mixed
     */
    public function getId(): ?int;

    /**
     * @return mixed
     */
    public function getMethod(): string;

    /**
     * @return mixed
     */
    public function getRegex(): string;
}