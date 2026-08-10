> You are in **splicewire/laravel-circuit-spine** — the circuit spine's shared value vocabulary: the typed {type, payload} Envelope, Port + PortValidator contract, Graph Node/Edge wire DTOs, Run/NodeRun status enums and records, and the RunContext provenance object.

This package is the data surface satellites and hosts share: pure DTOs and contracts with no
scheduling, dispatch, or cycle-detection logic. The heavy circuit kernel that consumes these
types stays private in a separate, in-app engine package.
