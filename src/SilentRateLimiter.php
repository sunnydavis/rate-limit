<?php

namespace RateLimit;

interface SilentRateLimiter
{
    public function limitSilently(string $identifier): Status;
}
