import { LoDashStatic } from "lodash";
import { AxiosStatic } from "axios";

declare global {
    interface Window {
        _: LoDashStatic;
        axios: AxiosStatic;
    }
}
