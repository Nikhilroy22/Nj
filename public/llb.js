
     
     class AlertLib {
  constructor() {
    this.createContainer();
  }

  createContainer() {
    const container = document.createElement("div");
    container.id = "alert-container";
    container.style.position = "fixed";
    container.style.top = "10px";
    container.style.right = "10px";
    container.style.zIndex = "1000";
    container.style.display = "flex";
    container.style.flexDirection = "column";
    container.style.gap = "10px";
    document.body.appendChild(container);
  }

  showAlert(message, type = "info", duration = 3000) {
    const alert = document.createElement("div");
    alert.className = `alert alert-${type}`;
    alert.textContent = message;
    alert.style.padding = "10px 20px";
    alert.style.borderRadius = "5px";
    alert.style.color = "#fff";
    alert.style.fontFamily = "Arial, sans-serif";
    alert.style.boxShadow = "0 4px 6px rgba(0, 0, 0, 0.1)";

    // Styling based on type
    if (type === "success") alert.style.backgroundColor = "#4caf50";
    else if (type === "error") alert.style.backgroundColor = "#f44336";
    else if (type === "warning") alert.style.backgroundColor = "#ff9800";
    else alert.style.backgroundColor = "#2196f3";

    // Add alert to container
    document.getElementById("alert-container").appendChild(alert);

    // Remove alert after specified duration
    setTimeout(() => {
      alert.remove();
    }, duration);
  }
}

// Usage example:
// Alert Library
const alertLibrary = {
  success: (message) => {
    alert(`Success: ${message}`);
  },
  error: (message) => {
    alert(`Error: ${message}`);
  },
  info: (message) => {
    alert(`Info: ${message}`);
  },
  warning: (message) => {
    alert(`Warning: ${message}`);
  },
};

// Example usage

