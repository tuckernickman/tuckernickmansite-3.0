(function () {
  const HOVER_CLASS = "is-font-hovered";
  const CLEAR_DELAY_MS = 340;

  function getTarget(element) {
    return element instanceof Element ? element.closest(".font-change") : null;
  }

  function lockElement(element) {
    if (!element || element.classList.contains(HOVER_CLASS)) {
      return;
    }

    if (element.dataset.hoverUnlockTimer) {
      window.clearTimeout(Number(element.dataset.hoverUnlockTimer));
      delete element.dataset.hoverUnlockTimer;
    }

    const computedStyle = window.getComputedStyle(element);
    const rect = element.getBoundingClientRect();

    element.dataset.originalInlineWidth = element.style.width || "";
    element.dataset.originalInlineHeight = element.style.height || "";
    element.dataset.originalInlineDisplay = element.style.display || "";

    if (computedStyle.display === "inline") {
      element.style.display = "inline-block";
    }

    element.style.width = Math.ceil(rect.width) + "px";
    element.style.height = Math.ceil(rect.height) + "px";
    element.classList.add(HOVER_CLASS);
  }

  function unlockElement(element) {
    if (!element) {
      return;
    }

    element.classList.remove(HOVER_CLASS);

    const timerId = window.setTimeout(() => {
      element.style.width = element.dataset.originalInlineWidth || "";
      element.style.height = element.dataset.originalInlineHeight || "";
      element.style.display = element.dataset.originalInlineDisplay || "";
      delete element.dataset.originalInlineWidth;
      delete element.dataset.originalInlineHeight;
      delete element.dataset.originalInlineDisplay;
      delete element.dataset.hoverUnlockTimer;
    }, CLEAR_DELAY_MS);

    element.dataset.hoverUnlockTimer = String(timerId);
  }

  document.addEventListener(
    "pointerover",
    (event) => {
      const target = getTarget(event.target);
      const from = getTarget(event.relatedTarget);
      if (!target || target === from) {
        return;
      }
      lockElement(target);
    },
    true
  );

  document.addEventListener(
    "pointerout",
    (event) => {
      const target = getTarget(event.target);
      const to = getTarget(event.relatedTarget);
      if (!target || target === to) {
        return;
      }
      unlockElement(target);
    },
    true
  );

  document.addEventListener(
    "focusin",
    (event) => {
      const target = getTarget(event.target);
      if (target) {
        lockElement(target);
      }
    },
    true
  );

  document.addEventListener(
    "focusout",
    (event) => {
      const target = getTarget(event.target);
      if (target) {
        unlockElement(target);
      }
    },
    true
  );
})();