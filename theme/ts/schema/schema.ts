import { InferInterceptors } from "alpinejs"

export type HeaderFront = {
    open:boolean,
    onToggleMenu(this:InferInterceptors<HeaderFront>):void

}