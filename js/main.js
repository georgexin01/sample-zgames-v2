/**
 * main.js - SUPERONG Mobile App
 * JavaScript functionality for buttons, modals, and interactions
 * 99% Similarity Required
 */

// ============================================================================
// MODAL FUNCTIONS
// ============================================================================

/**
 * Show a modal by ID
 */
function showModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
  }
}

/**
 * Close a modal by ID
 */
function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.remove("active");
    document.body.style.overflow = "";
  }
}

/**
 * Show success modal with custom message
 */
function showSuccess(message, duration = 2000) {
  const modal = document.getElementById("successModal");
  const text = document.getElementById("successModalText");
  if (modal && text) {
    text.textContent = message;
    showModal("successModal");
    setTimeout(() => {
      closeModal("successModal");
    }, duration);
  }
}

/**
 * Show confirm modal
 */
function showConfirm(options) {
  const modal = document.getElementById("confirmModal");
  const icon = document.getElementById("confirmModalIcon");
  const title = document.getElementById("confirmModalTitle");
  const message = document.getElementById("confirmModalMessage");
  const btn = document.getElementById("confirmModalBtn");

  if (modal) {
    if (icon && options.icon) {
      icon.innerHTML = `<i class="fas ${options.icon}"></i>`;
    }
    if (title) title.textContent = options.title || "确认操作？";
    if (message) message.textContent = options.message || "";
    if (btn && options.onConfirm) {
      btn.onclick = () => {
        closeModal("confirmModal");
        options.onConfirm();
      };
    }
    showModal("confirmModal");
  }
}

/**
 * Show password input modal
 */
function showPasswordModal(options) {
  const modal = document.getElementById("passwordModal");
  const title = document.getElementById("passwordModalTitle");
  const btn = document.getElementById("passwordModalBtn");
  const inputs = document.querySelectorAll(".sp-password-box");

  if (modal) {
    if (title) title.textContent = options.title || "输入密码";

    // Clear inputs
    inputs.forEach((input) => (input.value = ""));

    // Focus first input
    if (inputs.length > 0) {
      setTimeout(() => inputs[0].focus(), 100);
    }

    if (btn && options.onSubmit) {
      btn.onclick = () => {
        let password = "";
        inputs.forEach((input) => (password += input.value));
        if (password.length === inputs.length) {
          closeModal("passwordModal");
          options.onSubmit(password);
        }
      };
    }
    showModal("passwordModal");
  }
}

/**
 * Show language selector modal
 */
function showLangModal() {
  showModal("langModal");
}

// ============================================================================
// PASSWORD INPUT BOXES
// ============================================================================
document.addEventListener("DOMContentLoaded", function () {
  const passwordBoxes = document.querySelectorAll(".sp-password-box");

  passwordBoxes.forEach((box, index) => {
    box.addEventListener("input", function (e) {
      if (this.value.length === 1) {
        // Move to next box
        const next = passwordBoxes[index + 1];
        if (next) next.focus();
      }
    });

    box.addEventListener("keydown", function (e) {
      if (e.key === "Backspace" && this.value === "") {
        // Move to previous box
        const prev = passwordBoxes[index - 1];
        if (prev) {
          prev.focus();
          prev.value = "";
        }
      }
    });
  });
});

// ============================================================================
// CLOSE MODAL ON OVERLAY CLICK
// ============================================================================
document.addEventListener("click", function (e) {
  if (e.target.classList.contains("sp-modal-overlay")) {
    e.target.classList.remove("active");
    document.body.style.overflow = "";
  }
});

// ============================================================================
// LANGUAGE DROPDOWN
// ============================================================================
document.addEventListener("DOMContentLoaded", function () {
  const langDropdown = document.getElementById("langDropdown");
  if (langDropdown) {
    langDropdown.addEventListener("click", function (e) {
      e.stopPropagation();
      this.classList.toggle("active");
    });

    document.addEventListener("click", function () {
      langDropdown.classList.remove("active");
    });
  }
});

// ============================================================================
// COPY TO CLIPBOARD
// ============================================================================
function copyToClipboard(text) {
  if (navigator.clipboard && navigator.clipboard.writeText) {
    navigator.clipboard
      .writeText(text)
      .then(() => {
        showSuccess("复制成功");
      })
      .catch(() => {
        fallbackCopy(text);
      });
  } else {
    fallbackCopy(text);
  }
}

function fallbackCopy(text) {
  const textarea = document.createElement("textarea");
  textarea.value = text;
  textarea.style.position = "fixed";
  textarea.style.opacity = "0";
  document.body.appendChild(textarea);
  textarea.select();
  try {
    document.execCommand("copy");
    showSuccess("复制成功");
  } catch (err) {
    console.error("Copy failed", err);
  }
  document.body.removeChild(textarea);
}

// ============================================================================
// TAB SWITCHING
// ============================================================================
function switchTab(tabGroup, tabIndex) {
  const tabs = document.querySelectorAll(
    `[data-tab-group="${tabGroup}"] .sp-tab`,
  );
  const contents = document.querySelectorAll(
    `[data-tab-content="${tabGroup}"]`,
  );

  tabs.forEach((tab, index) => {
    tab.classList.toggle("active", index === tabIndex);
  });

  contents.forEach((content, index) => {
    content.style.display = index === tabIndex ? "block" : "none";
  });
}

// Initialize tabs on page load
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".sp-tabs").forEach((tabGroup) => {
    const groupName = tabGroup.dataset.tabGroup;
    const tabs = tabGroup.querySelectorAll(".sp-tab");

    tabs.forEach((tab, index) => {
      tab.addEventListener("click", () => switchTab(groupName, index));
    });
  });
});

// ============================================================================
// LOGOUT FUNCTION
// ============================================================================
function logout() {
  showConfirm({
    icon: "fa-sign-out-alt",
    title: "退出登入",
    message: "确定要退出登入？",
    onConfirm: () => {
      // Redirect to login page
      window.location.href = "login.php";
    },
  });
}

// ============================================================================
// DELETE FRIEND FUNCTION
// ============================================================================
function deleteFriend(friendId, friendName) {
  showConfirm({
    icon: "fa-user-minus",
    title: "删除该好友？",
    message: friendName,
    onConfirm: () => {
      // TODO: Call API to delete friend
      showSuccess("已删除好友");
    },
  });
}

// ============================================================================
// ADD TO BLACKLIST FUNCTION
// ============================================================================
function addToBlacklist(userId, userName) {
  showConfirm({
    icon: "fa-ban",
    title: "加入黑名单？",
    message: userName,
    onConfirm: () => {
      // TODO: Call API to add to blacklist
      showSuccess(userName + " 已加入黑名单");
    },
  });
}

// ============================================================================
// REMOVE FROM BLACKLIST FUNCTION
// ============================================================================
function removeFromBlacklist(userId, userName) {
  showConfirm({
    icon: "fa-user-check",
    title: "解除黑名单？",
    message: userName,
    onConfirm: () => {
      // TODO: Call API to remove from blacklist
      showSuccess("已解除黑名单");
    },
  });
}

// ============================================================================
// TRANSFER CONFIRMATION
// ============================================================================
function confirmTransfer(data) {
  showPasswordModal({
    title: "输入密码",
    onSubmit: (password) => {
      // TODO: Verify password and process transfer
      showSuccess("转帐成功");
    },
  });
}

// ============================================================================
// FORM VALIDATION
// ============================================================================
function validateForm(formId) {
  const form = document.getElementById(formId);
  if (!form) return false;

  const inputs = form.querySelectorAll("[required]");
  let isValid = true;

  inputs.forEach((input) => {
    if (!input.value.trim()) {
      isValid = false;
      input.classList.add("error");
    } else {
      input.classList.remove("error");
    }
  });

  return isValid;
}

// ============================================================================
// UTILITY FUNCTIONS
// ============================================================================

/**
 * Format number with commas
 */
function formatNumber(num) {
  return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

/**
 * Format currency
 */
function formatMoney(amount, currency = "MYR") {
  return currency + " " + formatNumber(parseFloat(amount).toFixed(2));
}

/**
 * Debounce function
 */
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

// ============================================================================
// PREVENT DEFAULT ON EMPTY LINKS
// ============================================================================
document.addEventListener("click", function (e) {
  const link = e.target.closest("a");
  if (link && link.getAttribute("href") === "#") {
    e.preventDefault();
  }
});

// ============================================================================
// LANGUAGE SELECTOR DROPDOWN
// ============================================================================

document.addEventListener("DOMContentLoaded", function () {
  const langToggle = document.getElementById("langToggle");
  const langDropdown = document.getElementById("langDropdown");

  if (!langToggle || !langDropdown) return;

  // Toggle dropdown on button click
  langToggle.addEventListener("click", function (e) {
    e.stopPropagation();
    langDropdown.classList.toggle("active");
  });

  // Close dropdown when clicking outside
  document.addEventListener("click", function (e) {
    if (!langToggle.contains(e.target) && !langDropdown.contains(e.target)) {
      langDropdown.classList.remove("active");
    }
  });

  // Close dropdown when selecting a language
  const langItems = langDropdown.querySelectorAll(".sp-lang-item");
  langItems.forEach((item) => {
    item.addEventListener("click", function () {
      langDropdown.classList.remove("active");
    });
  });
});

// ============================================================================
// CONSOLE LOG
// ============================================================================
console.log("SUPERONG Mobile App v1.0 - Loaded");
