import Alpine from "alpinejs"

import { onToggleMenu } from "./helpers"
import { HeaderFront } from "./schema";

//@ts-ignore
window.Alpine = Alpine;

Alpine.data("header", ():HeaderFront => ({
    onToggleMenu,
    open:false,
}
))

Alpine.start()




