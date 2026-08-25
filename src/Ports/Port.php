<?php

namespace Splicewire\Circuits\Ports;

/**
 * A typed slot on a node: an envelope `type` name plus the JSON Schema its payload
 * must satisfy. Schemas are authored host-side — `Data` classes projected to JSON
 * Schema via laravel-data-schemas, or raw JSON Schema from an external integrator —
 * and handed to the kernel as a plain array, so the kernel never reflects PHP types.
 *
 * A port that constrains no envelope type says so with `type: null`. That state used to be
 * spelled `''`, which was a sentinel only because this property could not be nullable: an
 * empty string is not a type name, and `'' ?? $default` returns `''`, so the elvis in
 * `CapabilityDispatcher` that exists to supply a default type could never fire and a node
 * would emit `Envelope('')` downstream. `null` is the state; `''` is now an ordinary (and
 * meaningless) type name that no caller passes.
 */
class Port
{
    /**
     * @param  ?string  $type  the envelope type this port accepts, or null to constrain none.
     * @param  array<string, mixed>  $schema  JSON Schema for the payload (`[]` = accept any payload).
     */
    public function __construct(
        public ?string $type = null,
        public array $schema = [],
        public ?string $name = null,
    ) {}

    /**
     * @param  array<string, mixed>  $schema
     */
    public static function of(?string $type = null, array $schema = [], ?string $name = null): self
    {
        return new self($type, $schema, $name);
    }
}
