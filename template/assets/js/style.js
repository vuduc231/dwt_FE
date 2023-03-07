/*---------------------------------------------
Template name :  DWT
Version       :  1.0
Author        :  Duc Minh Vu
Author url    :  https://publicsite.pro

** Custom JS
----------------------------------------------*/

document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    // Preloader
    const preloader = document.querySelector('#loader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove();
        });
    }

    // CHANGE TITLE
    const docTitle = document.title;
    window.addEventListener('blur', () => {
        document.title = 'Hãy tập trung làm việc 🤟';
    });

    window.addEventListener('focus', () => {
        document.title = docTitle;
    });

    // SELECT MULTIPLE LEFT SIDEBAR
    const select = document.getElementById('select');
    const elems = document.querySelectorAll('.data_chart-items');
    const obj = {};

    const filtered = [...elems].filter((el) => {
        if (!obj[el.id]) {
            obj[el.id] = true;
            return true;
        } else {
            return false;
        }
    });

    const selectOpt = filtered.map((el) => {
        el.style.display = 'block';
        return `<option> ${el.id} </option>`;
    });

    select.innerHTML = selectOpt.join('');

    select.addEventListener('change', function () {
        for (let i = 0, iLen = select.options.length; i < iLen; i++) {
            const opt = select.options[i];

            const val = opt.value || opt.text;
            if (opt.selected) {
                // if (opt.innerText === 'Xem tất cả') {
                //     var items = document.getElementsByClassName('data_chart-items');
                //     for (i = 0; i < items.length; i++) {
                //         items[i].style.display = 'block';
                //     }
                //     return;
                // }
                document.getElementById(val).style.display = 'block';
            } else {
                document.getElementById(val).style.display = 'none';
            }
        }
    });

    // const selectPicker = document.getElementById('mySelect');
    // const labelPicker = document.getElementById('label');
    // const valuePicker = document.getElementById('value');

    // selectPicker.addEventListener('change', function () {
    //     labelPicker.textContent = selectPicker.options[selectPicker.selectedIndex].parentNode.label;
    //     valuePicker.textContent = selectPicker.value;
    // });

    // BTN SHOW/HIDE LEFT RIGHT
    const mainWrap = document.getElementById('mainWrap');
    const asideLeft = document.getElementById('aside-left');
    const asideRight = document.getElementById('aside-right');
    const btnCloseLeft = document.getElementById('btn-left');
    const btnCloseRight = document.getElementById('btn-right');

    btnCloseLeft.onclick = function () {
        const isClosed = asideLeft.style.left === '-275px';
        asideLeft.style.left = isClosed ? '0' : '-275px';
        mainWrap.style.marginLeft = isClosed ? '275px' : '0';
    };

    btnCloseRight.onclick = function () {
        const isClosed = asideRight.style.right === '-275px';
        asideRight.style.right = isClosed ? '0' : '-275px';
        mainWrap.style.marginRight = isClosed ? '275px' : '0';
    };

    function handleChangeIconLeft(icon) {
        icon.classList.toggle('bi-arrow-bar-left');
        icon.classList.toggle('bi-arrow-bar-right');
    }
    function handleChangeIconRight(icon) {
        icon.classList.toggle('bi-arrow-bar-right');
        icon.classList.toggle('bi-arrow-bar-left');
    }

    // THIS MONTH
    const today = new Date();
    const month = (today.getMonth() + 1).toString().padStart(2, '0');
    const year = today.getFullYear();
    const currentDate = `${month}/${year}`;
    document.getElementById('thismonth').textContent = currentDate;
});

// BTN SETTINGS
function handleClickSettings() {
    const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
    if (sidebarBodySelectWrapper.style.display === 'none') {
        sidebarBodySelectWrapper.style.display = 'block';
        document.addEventListener('click', handleClickOutside);
    } else {
        sidebarBodySelectWrapper.style.display = 'none';
        document.removeEventListener('click', handleClickOutside);
    }
}

function handleClickOutside(event) {
    const sidebarBodySettings = document.getElementsByClassName('sidebarBody_settings-body')[0];
    const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
    if (!sidebarBodySettings.contains(event.target) && !sidebarBodySelectWrapper.contains(event.target)) {
        sidebarBodySelectWrapper.style.display = 'none';
        document.removeEventListener('click', handleClickOutside);
    }
}