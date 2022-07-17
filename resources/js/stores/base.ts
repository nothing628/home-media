import type { StateTree, PiniaCustomStateProperties } from "pinia";
import type { UnwrapRef } from "vue";

export type GetterArgument<S extends StateTree> = UnwrapRef<S> &
    UnwrapRef<PiniaCustomStateProperties<S>>;
