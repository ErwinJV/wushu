import { InferInterceptors } from "alpinejs";

import { HeaderFront } from "../schema";

export const marginBodyHeader = (): void => {
  const header = document.getElementById("siteHeader");
  const headerHeight = header?.offsetHeight;
  const headerPad = document.getElementById("headerPad");
  console.log("Header Size: ", headerHeight);
  if (headerPad) {
    headerPad.style.height = headerHeight + "px";
  }
};

export function onToggleMenu(this: InferInterceptors<HeaderFront>): void {
  console.log("Initial: ", this.open);
  this.open = !this.open;
  console.log("End: ", this.open);
}
