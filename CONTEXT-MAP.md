# laravel-circuit-spine — Context Map (spoke)

The satellite-facing DTO half of the circuit engine (`Port`/`Node`/`Edge`/`Envelope`/`Run`;
pure data, no rushing deps). Layering + shared seam rules: `splicewire-app/CONTEXT-MAP.md`.

## The seam this file exists to record

Its consumer is the engine PACKAGE beside it (the in-app era this file described ended with the
ESP renames): `splicewire/laravel-circuit-engine` (`Splicewire\Circuits\`) depends on this package —
**never the reverse** (1:1 parity). Pattern: app ADR-0044.
