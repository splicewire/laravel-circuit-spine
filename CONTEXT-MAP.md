# laravel-circuit-spine — Context Map (spoke)

The satellite-facing DTO half of the circuit engine (`Port`/`Node`/`Edge`/`Envelope`/`Run`;
pure data, no rushing deps). Layering + shared seam rules: `splicewire-app/CONTEXT-MAP.md`.

## The seam this file exists to record

Its consumer lives in a **different, in-app** repo and isn't visible from here:
`laravel-circuit-engine` (`Rushing\CircuitEngine\`, private) depends on this package —
**never the reverse** (1:1 parity). Pattern: app ADR-0044.
