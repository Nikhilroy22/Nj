(function (global) {
    function $q(selector) {
        if (!(this instanceof $q)) {
            return new $q(selector);
        }
        this.elements = document.querySelectorAll(selector);
    }

    // Apply function to each element
    $q.prototype.each = function (callback) {
        this.elements.forEach((el, index) => callback(el, index));
        return this;
    };

    // Manipulate HTML content
    $q.prototype.html = function (html) {
        if (html === undefined) return this.elements[0]?.innerHTML;
        return this.each(el => el.innerHTML = html);
    };

    // Manipulate text content
    $q.prototype.text = function (text) {
        if (text === undefined) return this.elements[0]?.textContent;
        return this.each(el => el.textContent = text);
    };

    // Add or Get attributes
    $q.prototype.attr = function (name, value) {
        if (value === undefined) return this.elements[0]?.getAttribute(name);
        return this.each(el => el.setAttribute(name, value));
    };

    // CSS Manipulation
    $q.prototype.css = function (property, value) {
        return this.each(el => el.style[property] = value);
    };

    // Event Handling
    $q.prototype.on = function (event, callback) {
        return this.each(el => el.addEventListener(event, callback));
    };

    $q.prototype.click = function (callback) {
        return this.on('click', callback);
    };

    $q.prototype.hover = function (hoverIn, hoverOut) {
        return this.on('mouseenter', hoverIn).on('mouseleave', hoverOut);
    };

    // AJAX Helper
    $q.ajax = function ({ url, method = 'GET', data = null, success, error }) {
        let xhr = new XMLHttpRequest();
        xhr.open(method, url, true);
        xhr.setRequestHeader('Content-Type', 'application/json');

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status >= 200 && xhr.status < 300) {
                    success && success(JSON.parse(xhr.responseText));
                } else {
                    error && error(xhr.statusText);
                }
            }
        };
        xhr.send(data ? JSON.stringify(data) : null);
    };

    global.$q = $q; // Expose to global scope

})(window);