<!DOCTYPE html>
<html lang="en">

<head>
    <link data-savepage-href="https://docs.woven.finance/logo.png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALdSURBVHgB7ZrRddowFIb/qxCe2aDuBGUEskGYIHQDUwinbyFvbSjUG4RMUDoBZAO6gbuBX5sEq1eyoW0KtiiOkV1/53DASMa+yLq/7r0iGCJd14GoX4DQjL6QX2kymiJjpNtv4YSuIKnFhwFAM4Q/rsnzfJPzyaSTdC+bEDTnj41np3s0+dhFRsje4BwSX7Y0+QgfzkyMEjBBkLpIY8stuPLdZQdZIfF5R4sDOnVhQKpBstc71z+4+yYukAH6UUu6DpHRddJHSIpGYjuRg3xomHQye+QKRA2WQN6nBXvS1zgQawxSmLrmJDYGbXQG0tFfhPJO/WvYA/Z4t8ife4SPi/WfoQ2S3YESTA964sXSJLjj3lAH+dPhgfBZK9vkjZZCjwxhCkMvYilOrJU8DoaCVQAcpWVsEL1CWRDkCF5kfkdZIAqUQTOUA5/GNzMRu+ZrFJuAZaatPmi3TZObIbu9GXs7doF4o7uspI99IblAnkjieAnfOLTwWIfU51/Cqnw4vx3k8Wg8OsORsWbpw3qodDBRC02WRhat5WocFYt5SqfUCLt04UNlkO1UBtlOZZDtVAbZTmWQ7VQG2U7qajsuak1REP4wKIpJak3kzN4ZWlWAg4xjp6flOlpVRJlTlWw8Ob2Ny4DHwKiSuEEnFcmJDuqcgh4MOY2g8yLRHBL1+RGNyYIhG6XTByIuKTooPldqyoiCj8zv6PlfQh0Sq7JkTqE8nqDxeJZ7gvBlUJszguiRWz22uTx/h2KiNKirsr/qIEoFR8LUUS+tSbYTPmwytM+Tj38tfbIo3L40SfeYupaT/X4LYdIuDgp4uDPb73Mo6angkJyUYrDPL2sM+g/jIQqDxHb5D3WkrTwFKR3S2jXpBq1Wi8Qfo2zcPU/0ZeJ11EZAA1IN0i49lNvnCAtyprsaw9XbHS0+z2WjsqlxHCLd9w4/fsOoZCkDXtTer8UsS7Zv0SReBXzwTc7/CePJ8ZVR7zTcAAAAAElFTkSuQmCC"
          rel="icon">
    <style>
        body {
            transition: opacity ease-in 0.2s;
        }

        body[unresolved] {
            opacity: 0;
            display: block;
            overflow: hidden;
            position: relative;
        }
    </style>
    <style type="text/css">
        :root {
            --docsify-example-panels-document-width: 90%;
            --docsify-example-panels-wrapper-width: 100%;
            --docsify-example-panels-padding-inner: 8px 16px;
            --docsify-example-panels-padding-surroundings: 0px;
            --docsify-example-panels-left-panel-background: transparent;
            --docsify-example-panels-left-panel-width: 60%;
            --docsify-example-panels-right-panel-background: transparent;
            --docsify-example-panels-right-panel-width: 40%;
            --docsify-example-panels-title-background: transparent
        }

        .markdown-section {
            max-width: 90% !important;
            max-width: var(--docsify-example-panels-document-width) !important;
            width: 90% !important;
            width: var(--docsify-example-panels-document-width) !important
        }

        .docsify-example-panels {
            width: 100%;
            width: var(--docsify-example-panels-wrapper-width)
        }

        .docsify-example-panel,
        .docsify-example-panels {
            padding: 0;
            display: inline-block
        }

        .docsify-example-panel.left-panel {
            float: left;
            max-width: 60%;
            max-width: var(--docsify-example-panels-left-panel-width);
            width: 60%;
            width: var(--docsify-example-panels-left-panel-width);
            padding: 8px 16px;
            padding: var(--docsify-example-panels-padding-inner);
            padding-left: 0;
            padding-left: var(--docsify-example-panels-padding-surroundings);
            background: transparent;
            background: var(--docsify-example-panels-left-panel-background)
        }

        @media only screen and (max-width: 1300px) {
            .docsify-example-panel.left-panel {
                float: none !important;
                max-width: 100% !important;
                width: 100% !important;
                padding: 0 !important
            }
        }

        .docsify-example-panel.right-panel {
            max-width: 40%;
            max-width: var(--docsify-example-panels-right-panel-width);
            width: 40%;
            width: var(--docsify-example-panels-right-panel-width);
            padding: 8px 16px;
            padding: var(--docsify-example-panels-padding-inner);
            padding-right: 0;
            padding-right: var(--docsify-example-panels-padding-surroundings);
            background: transparent;
            background: var(--docsify-example-panels-right-panel-background)
        }

        @media only screen and (max-width: 1300px) {
            .docsify-example-panel.right-panel {
                max-width: 100% !important;
                width: 100% !important;
                padding: 0 !important
            }
        }

        .docsify-example-panel.title-panel {
            padding: 0;
            padding-left: 0;
            padding-left: var(--docsify-example-panels-padding-surroundings);
            padding-right: 0;
            padding-right: var(--docsify-example-panels-padding-surroundings);
            max-width: 100%;
            width: 100%;
            background: transparent;
            background: var(--docsify-example-panels-title-background)
        }
    </style>
    <style type="text/css">
        :root {
            --docsifytabs-border-color: #ededed;
            --docsifytabs-border-px: 1px;
            --docsifytabs-border-radius-px: ;
            --docsifytabs-margin: 1.5em 0;
            --docsifytabs-tab-background: #f8f8f8;
            --docsifytabs-tab-background--active: var(--docsifytabs-content-background);
            --docsifytabs-tab-color: #999;
            --docsifytabs-tab-color--active: inherit;
            --docsifytabs-tab-highlight-px: 3px;
            --docsifytabs-tab-highlight-color: var(--theme-color, currentColor);
            --docsifytabs-tab-padding: 0.6em 1em;
            --docsifytabs-content-background: inherit;
            --docsifytabs-content-padding: 1.5rem
        }

        .docsify-tabs:before,
        .docsify-tabs__tab {
            z-index: 1
        }

        .docsify-tabs__tab--active,
        .docsify-tabs__tab:focus {
            z-index: 2
        }

        .docsify-tabs {
            display: flex;
            flex-wrap: wrap;
            position: relative
        }

        .docsify-tabs:before {
            content: "";
            flex: 1 1;
            order: 0
        }

        .docsify-tabs__tab {
            appearance: none;
            font-size: inherit;
            margin: 0;
            order: -1;
            position: relative
        }

        .docsify-tabs__content[class] {
            height: 0;
            overflow: hidden;
            position: absolute;
            visibility: hidden;
            width: 100%
        }

        .docsify-tabs__content[class] > :first-child {
            margin-top: 0
        }

        .docsify-tabs__content[class] > :last-child {
            margin-bottom: 0
        }

        .docsify-tabs__tab--active + .docsify-tabs__content[class] {
            height: auto;
            overflow: auto;
            position: relative;
            visibility: visible
        }

        [class*=docsify-tabs--] {
            margin: 1.5em 0;
            margin: var(--docsifytabs-margin)
        }

        [class*=docsify-tabs--] > .docsify-tabs__tab {
            background: #f8f8f8;
            background: var(--docsifytabs-tab-background);
            color: #999;
            color: var(--docsifytabs-tab-color);
            padding: .6em 1em;
            padding: var(--docsifytabs-tab-padding)
        }

        [class*=docsify-tabs--] > .docsify-tabs__tab--active {
            background: inherit;
            background: var(--docsifytabs-tab-background--active);
            color: inherit;
            color: var(--docsifytabs-tab-color--active)
        }

        [class*=docsify-tabs--] > .docsify-tabs__content {
            background: inherit;
            background: var(--docsifytabs-content-background)
        }

        [class*=docsify-tabs--] > .docsify-tabs__tab--active + .docsify-tabs__content {
            padding: 1.5rem;
            padding: var(--docsifytabs-content-padding)
        }

        .docsify-tabs--classic:before,
        .docsify-tabs--classic > .docsify-tabs__content,
        .docsify-tabs--classic > .docsify-tabs__tab {
            border-color: #ededed;
            border-color: var(--docsifytabs-border-color);
            border-style: solid;
            border-width: 1px;
            border-width: var(--docsifytabs-border-px)
        }

        .docsify-tabs--classic:before {
            border-left-width: 0;
            border-right-width: 0;
            border-top-width: 0;
            margin-right: 1px;
            margin-right: var(--docsifytabs-border-px)
        }

        .docsify-tabs--classic > .docsify-tabs__tab:first-of-type {
            border-top-left-radius: var(--docsifytabs-border-radius-px)
        }

        .docsify-tabs--classic > .docsify-tabs__tab:last-of-type {
            border-top-right-radius: var(--docsifytabs-border-radius-px)
        }

        .docsify-tabs--classic > .docsify-tabs__tab ~ .docsify-tabs__tab {
            margin-left: -1px;
            margin-left: calc(0px - var(--docsifytabs-border-px))
        }

        .docsify-tabs--classic > .docsify-tabs__tab--active {
            border-bottom-width: 0;
            box-shadow: inset 0 3px 0 0 currentColor;
            box-shadow: inset 0 var(--docsifytabs-tab-highlight-px) 0 0 var(--docsifytabs-tab-highlight-color)
        }

        .docsify-tabs--classic > .docsify-tabs__content {
            border-radius: 0;
            border-radius: 0 var(--docsifytabs-border-radius-px) var(--docsifytabs-border-radius-px) var(--docsifytabs-border-radius-px);
            border-top: 0;
            margin-top: -1px;
            margin-top: calc(0px - var(--docsifytabs-border-px))
        }

        .docsify-tabs--material > .docsify-tabs__tab {
            background: transparent;
            border: 0;
            margin-bottom: 2px;
            margin-bottom: calc(var(--docsifytabs-tab-highlight-px) - var(--docsifytabs-border-px))
        }

        .docsify-tabs--material > .docsify-tabs__tab--active {
            background: transparent;
            box-shadow: 0 3px 0 0 currentColor;
            box-shadow: 0 var(--docsifytabs-tab-highlight-px) 0 0 var(--docsifytabs-tab-highlight-color)
        }

        .docsify-tabs--material > .docsify-tabs__content {
            border-color: #ededed;
            border-color: var(--docsifytabs-border-color);
            border-style: solid;
            border-width: 1px 0;
            border-width: var(--docsifytabs-border-px) 0
        }
    </style>
    <meta charset="UTF-8">
    <title>Virtual Accounts</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="Description" name="description">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <style data-savepage-href="../../assets/css/doc.css">
        * {
            -webkit-font-smoothing: antialiased;
            -webkit-overflow-scrolling: touch;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-text-size-adjust: none;
            -webkit-touch-callout: none;
            box-sizing: border-box;
        }

        body:not(.ready) {
            overflow: hidden;
        }

        body:not(.ready) .app-nav,
        body:not(.ready) > nav,
        body:not(.ready) [data-cloak] {
            display: none;
        }

        div#app {
            font-size: 30px;
            font-weight: lighter;
            margin: 40vh auto;
            text-align: center;
        }

        div#app:empty:before {
            content: "Loading...";
        }

        .emoji {
            height: 1.2rem;
            vertical-align: middle;
        }

        .progress {
            background-color: var(--theme-color, #ff7276);
            height: 2px;
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            transition: width 0.2s, opacity 0.4s;
            width: 0;
            z-index: 999999;
        }

        .search .search-keyword,
        .search a:hover {
            color: var(--theme-color, #ff7276);
        }

        .search .search-keyword {
            font-style: normal;
            font-weight: 700;
        }

        body,
        html {
            height: 100%;
        }

        body {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            color: #34495e;
            font-family: "Calibre", Helvetica Neue, Arial, sans-serif;
            font-size: 15px;
            letter-spacing: 0;
            margin: 0;
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
        }

        a[disabled] {
            cursor: not-allowed;
            opacity: 0.6;
        }

        kbd {
            border: 1px solid #ccc;
            border-radius: 3px;
            display: inline-block;
            font-size: 12px !important;
            line-height: 12px;
            margin-bottom: 3px;
            padding: 3px 5px;
            vertical-align: middle;
        }

        li input[type="checkbox"] {
            margin: 0 0.2em 0.25em 0;
            vertical-align: middle;
        }

        .app-nav {
            position: absolute;
            right: 0;
            text-align: right;
            z-index: 10;
        }

        .app-nav p {
            margin: 0;
        }

        .app-nav > a {
            margin: 0 1rem;
            padding: 5px 0;
        }

        .app-nav li,
        .app-nav ul {
            display: inline-block;
            list-style: none;
            margin: 0;
        }

        /* .app-nav a.active,
.app-nav a:hover {
  color: var(--theme-color, #ff7276);
}
.app-nav a.active {
  border-bottom: 2px solid var(--theme-color, #ff7276);
}
.app-nav li {
  display: inline-block;
  margin: 0 1rem;
  padding: 5px 0;
  position: relative;
  cursor: pointer;
}
.app-nav.no-badge {
  margin-right: 25px;
}
*/

        .app-nav li ul {
            background-color: #fff;
            border: 1px solid;
            border-color: #ddd #ddd #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            display: none;
            max-height: calc(100vh - 61px);
            overflow-y: auto;
            padding: 10px 0;
            position: absolute;
            right: -15px;
            text-align: left;
            top: 100%;
            white-space: nowrap;
        }

        .app-nav li ul li {
            display: block;
            font-size: 14px;
            line-height: 1rem;
            margin: 8px 14px;
            white-space: nowrap;
        }

        .app-nav li ul a {
            display: block;
            font-size: inherit;
            margin: 0;
            padding: 0;
        }

        .app-nav li ul a.active {
            border-bottom: 0;
        }

        .app-nav li:hover ul {
            display: block;
        }

        .github-corner {
            border-bottom: 0;
            position: fixed;
            right: 0;
            text-decoration: none;
            top: 0;
            z-index: 1;
        }

        .github-corner:hover .octo-arm {
            -webkit-animation: octocat-wave 0.56s ease-in-out;
            animation: octocat-wave 0.56s ease-in-out;
        }

        .github-corner svg {
            color: #fff;
            fill: var(--theme-color, #ff7276);
            height: 80px;
            width: 80px;
        }

        main {
            display: block;
            position: relative;
            width: 100vw;
            height: 100%;
            z-index: 0;
        }

        main.hidden {
            display: none;
        }

        .anchor {
            display: inline-block;
            text-decoration: none;
            transition: all 0.3s;
        }

        .sidebar {
            border-right: 1.5px solid #919eab2e;
            overflow-y: auto;
            padding: 20px;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            transition: transform 0.25s ease-out;
            width: 300px;
            z-index: 20;
            padding-right: 10px;
            background-color: #fff;
        }

        .api .sidebar {
            width: 250px;
        }

        .sidebar > h1 {
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            font-weight: 300;
            text-align: center;
        }

        .sidebar > h1 a {
            color: inherit;
            text-decoration: none;
        }

        .sidebar > h1 .app-nav {
            display: block;
            position: static;
        }

        .sidebar .sidebar-nav {
            padding-bottom: 40px;
        }

        .sidebar > li.collapse .app-sub-sidebar {
            display: none;
        }

        .sidebar ul {
            margin: 0 0 0 15px;
            padding: 0;
        }

        .sidebar li > p {
            font-weight: 500;
            margin: 0;
        }

        .sidebar-heading {
            color: #9a9fa3;
            margin: 0;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 400;
        }

        .sidebar img {
            vertical-align: super;
            border-style: none;
        }

        /* .sidebar>.sidebar-nav>ul:not(.app-sub-sidebar)>li > p {
  display: flex;
} */

        .sidebar ul,
        .sidebar ul li {
            list-style: none;
        }

        .sidebar ul li a {
            border-bottom: none;
            display: block;
        }

        .sidebar ul li ul {
            padding-left: 20px;
        }

        .sidebar::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 4px;
        }

        .sidebar:hover::-webkit-scrollbar-thumb {
            background: hsla(0, 0%, 53.3%, 0.4);
        }

        .sidebar:hover::-webkit-scrollbar-track {
            background: hsla(0, 0%, 53.3%, 0.1);
        }

        .sidebar-toggle {
            background-color: transparent;
            background-color: hsla(0, 0%, 100%, 0.8);
            border: 0;
            outline: none;
            padding: 10px;
            position: absolute;
            bottom: 0;
            left: 0;
            text-align: center;
            transition: opacity 0.3s;
            z-index: 30;
            cursor: pointer;
        }

        .sidebar-toggle:hover .sidebar-toggle-button {
            opacity: 0.4;
        }

        .sidebar-toggle span {
            background-color: var(--theme-color, #ff7276);
            display: block;
            margin-bottom: 4px;
            width: 16px;
            height: 2px;
        }

        body.sticky .sidebar,
        body.sticky .sidebar-toggle {
            position: fixed;
            margin-top: 110px;
        }

        .content {
            padding-top: 20px;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 300px;
            transition: left 0.25s ease;
        }

        :root {
            --animate-duration: 1s;
            --animate-delay: 1s;
            --animate-repeat: 1;
        }

        #main-container {
            animation-duration: 0.5s;
            -webkit-animation-duration: calc(var(--animate-duration) / 2);
            animation-duration: calc(var(--animate-duration) / 2);
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .animate__fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        @-webkit-keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .api .content {
            left: 250px;
        }

        .markdown-section {
            margin: 0 auto;
            max-width: 80%;
            padding: 30px 15px 40px;
            position: relative;
        }

        .markdown-section > * {
            box-sizing: border-box;
            font-size: inherit;
        }

        .markdown-section > :first-child {
            margin-top: 0 !important;
        }

        .markdown-section hr {
            border: none;
            border-bottom: 1px solid #eee;
            margin: 2em 0;
        }

        .markdown-section iframe {
            border: 1px solid #eee;
            width: 1px;
            min-width: 100%;
        }

        .markdown-section table {
            border-collapse: collapse;
            border-spacing: 0;
            display: block;
            margin-bottom: 1rem;
            overflow: auto;
            width: 100%;
        }

        .markdown-section th {
            font-weight: 700;
        }

        .markdown-section td,
        .markdown-section th {
            border: 1px solid #ddd;
            padding: 6px 13px;
        }

        .markdown-section tr {
            border-top: 1px solid rgb(223, 16, 16);
        }

        .markdown-section p.tip {
            border-bottom-right-radius: 2px;
            border-left: 4px solid #f66;
            border-top-right-radius: 2px;
            margin: 2em 0;
            padding: 12px 24px 12px 30px;
            position: relative;
        }

        .markdown-section p.tip:before {
            background-color: #f66;
            border-radius: 100%;
            color: #fff;
            content: "!";
            font-family: "Calibre", Helvetica Neue, Arial, sans-serif;
            font-size: 14px;
            font-weight: 700;
            left: -12px;
            line-height: 20px;
            position: absolute;
            height: 20px;
            width: 20px;
            text-align: center;
            top: 14px;
        }

        .markdown-section p.tip code {
            background-color: #efefef;
        }

        .markdown-section p.tip em {
            color: #34495e;
        }

        .markdown-section p.warn {
            background: rgba(66, 185, 131, 0.1);
            border-radius: 2px;
            padding: 1rem;
        }

        .markdown-section ul.task-list > li {
            list-style-type: none;
        }

        body.close .sidebar {
            transform: translateX(-300px);
        }

        body.close .sidebar-toggle {
            width: auto;
        }

        body.close .content {
            left: 0;
        }

        @media print {
            .app-nav,
            .github-corner,
            .sidebar,
            .sidebar-toggle {
                display: none;
            }
        }

        @media screen and (max-width: 768px) {
            .github-corner,
            .sidebar,
            .sidebar-toggle {
                position: fixed;
            }

            .app-nav {
                margin-top: 16px;
            }

            .app-nav li ul {
                top: 30px;
            }

            main {
                height: auto;
                overflow-x: hidden;
            }

            .sidebar {
                left: -300px;
                transition: transform 0.25s ease-out;
            }

            .content {
                left: 0;
                max-width: 100vw;
                position: static;
                padding-top: 20px;
                transition: transform 0.25s ease;
            }

            .app-nav,
            .github-corner {
                transition: transform 0.25s ease-out;
            }

            .sidebar-toggle {
                background-color: transparent;
                width: auto;
                padding: 30px 30px 10px 10px;
            }

            body.close .sidebar {
                transform: translateX(300px);
            }

            body.close .sidebar-toggle {
                background-color: hsla(0, 0%, 100%, 0.8);
                transition: background-color 1s;
                width: 284px;
                padding: 10px;
            }

            body.close .content {
                transform: translateX(300px);
            }

            body.close .app-nav,
            body.close .github-corner {
                display: none;
            }

            .github-corner:hover .octo-arm {
                -webkit-animation: none;
                animation: none;
            }

            .github-corner .octo-arm {
                -webkit-animation: octocat-wave 0.56s ease-in-out;
                animation: octocat-wave 0.56s ease-in-out;
            }
        }

        @-webkit-keyframes octocat-wave {
            0%,
            to {
                transform: rotate(0);
            }
            20%,
            60% {
                transform: rotate(-25deg);
            }
            40%,
            80% {
                transform: rotate(10deg);
            }
        }

        @keyframes octocat-wave {
            0%,
            to {
                transform: rotate(0);
            }
            20%,
            60% {
                transform: rotate(-25deg);
            }
            40%,
            80% {
                transform: rotate(10deg);
            }
        }

        section.cover {
            align-items: center;
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100vw;
            display: none;
        }

        section.cover.show {
            display: flex;
        }

        section.cover.has-mask .mask {
            background-color: #fff;
            opacity: 0.8;
            position: absolute;
            top: 0;
            height: 100%;
            width: 100%;
        }

        section.cover .cover-main {
            flex: 1;
            margin: -20px 16px 0;
            text-align: center;
            position: relative;
        }

        section.cover a {
            color: inherit;
        }

        section.cover a,
        section.cover a:hover {
            text-decoration: none;
        }

        section.cover p {
            line-height: 1.5rem;
            margin: 1em 0;
        }

        section.cover h1 {
            color: inherit;
            font-size: 2.5rem;
            font-weight: 300;
            margin: 0.625rem 0 2.5rem;
            position: relative;
            text-align: center;
        }

        section.cover h1 a {
            display: block;
        }

        section.cover h1 small {
            bottom: -0.4375rem;
            font-size: 1rem;
            position: absolute;
        }

        section.cover blockquote {
            font-size: 1.5rem;
            text-align: center;
        }

        section.cover ul {
            line-height: 1.8;
            list-style-type: none;
            margin: 1em auto;
            max-width: 500px;
            padding: 0;
        }

        section.cover .cover-main > p:last-child a {
            border-radius: 2rem;
            border: 1px solid var(--theme-color, #ff7276);
            box-sizing: border-box;
            color: var(--theme-color, #ff7276);
            display: inline-block;
            font-size: 1.05rem;
            letter-spacing: 0.1rem;
            margin: 0.5rem 1rem;
            padding: 0.75em 2rem;
            text-decoration: none;
            transition: all 0.15s ease;
        }

        section.cover .cover-main > p:last-child a:last-child {
            background-color: var(--theme-color, #ff7276);
            color: #fff;
        }

        section.cover .cover-main > p:last-child a:last-child:hover {
            color: inherit;
            opacity: 0.8;
        }

        section.cover .cover-main > p:last-child a:hover {
            color: inherit;
        }

        section.cover blockquote > p > a {
            border-bottom: 2px solid var(--theme-color, #ff7276);
            transition: color 0.3s;
        }

        section.cover blockquote > p > a:hover {
            color: var(--theme-color, #ff7276);
        }

        body {
            background-color: #fff;
        }

        .sidebar {
            color: #364149;
        }

        .sidebar li {
            margin: 6px 0;
        }

        .sidebar ul li a {
            color: #34495e;
            font-size: 16px;
            font-weight: 400;
            overflow: hidden;
            text-decoration: none;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        .sidebar ul li ul {
            padding: 0;
        }

        .sidebar ul li.active > a {
            /* border-right: 2px solid; */
            color: var(--theme-color, #ff7276);
            font-weight: 600;
        }

        .api ul.app-sub-sidebar {
            margin: 0 !important;
        }

        /*.app-sub-sidebar li:before {
  content: "-";
  padding-right: 4px;
  float: left;
  margin-left: 30px;
}

.markdown-section h1,
.markdown-section h2,
.markdown-section h3,
.markdown-section h4,
.markdown-section strong {
  color: #2c3e50;
  font-weight: 600;
}
.markdown-section a {
  font-weight: inherit;
  text-decoration: none !important;
}
.markdown-section h1 {
  font-size: 2rem;
  margin: 0 0 1rem;
}
.markdown-section h2 {
  font-size: 1.5rem;
  margin: 45px 0 2rem;
}
.markdown-section h3 {
  font-size: 1.3rem;
  margin: 0px 0 0.6rem;
}
.markdown-section h4 {
  font-size: 1.1rem;
}
.markdown-section h5 {
  font-size: 1rem;
}
.markdown-section h6 {
  color: #777;
  font-size: 1rem;
}
.markdown-section figure,
.markdown-section p {
  margin: 1.2em 0;
  font-size: 16px;
}
.markdown-section ol,
.markdown-section p,
.markdown-section ul {
  line-height: 1.6rem;
  word-spacing: 0.05rem;
}
.markdown-section ol,
.markdown-section ul {
  padding-left: 1.5rem;
}
.markdown-section blockquote {
  border-left: 4px solid var(--theme-color, #ff7276);
  margin: 2em 0;
  padding-left: 20px;
}
.markdown-section blockquote p {
  font-weight: 600;
  margin-left: 0;
}
.markdown-section iframe {
  margin: 1em 0;
}
.markdown-section em {
  color: #7f8c8d;
}
.markdown-section code {
  border-radius: 2px;
  color: #e96900;
  font-size: 0.8rem;
  margin: 0 2px;
  padding: 3px 5px;
  white-space: pre-wrap;
}
.markdown-section code,
.markdown-section pre {
  background-color: #f8f8f8;
  font-family: Roboto Mono, Monaco, courier, monospace;
}
.markdown-section pre {
  -moz-osx-font-smoothing: initial;
  -webkit-font-smoothing: initial;
  line-height: 1.5rem;
  margin: 1.2em 0;
  overflow: auto;
  padding: 0 1.4rem;
  position: relative;
  word-wrap: normal;
}*/

        .token.cdata,
        .token.comment,
        .token.doctype,
        .token.prolog {
            color: #8e908c;
        }

        .token.namespace {
            opacity: 0.7;
        }

        .token.boolean,
        .token.number {
            color: #c76b29;
        }

        .token.punctuation {
            color: #525252;
        }

        .token.property {
            color: #c08b30;
        }

        .token.tag {
            color: #2973b7;
        }

        .token.string {
            color: var(--theme-color, #ff7276);
        }

        .token.selector {
            color: #6679cc;
        }

        .token.attr-name {
            color: #2973b7;
        }

        .language-css .token.string,
        .style .token.string,
        .token.entity,
        .token.url {
            color: #22a2c9;
        }

        .token.attr-value,
        .token.control,
        .token.directive,
        .token.unit {
            color: var(--theme-color, #ff7276);
        }

        .token.function,
        .token.keyword {
            color: #e96900;
        }

        .token.atrule,
        .token.regex,
        .token.statement {
            color: #22a2c9;
        }

        .token.placeholder,
        .token.variable {
            color: #3d8fd1;
        }

        .token.deleted {
            text-decoration: line-through;
        }

        .token.inserted {
            border-bottom: 1px dotted #202746;
            text-decoration: none;
        }

        .token.italic {
            font-style: italic;
        }

        .token.bold,
        .token.important {
            font-weight: 700;
        }

        .token.important {
            color: #c94922;
        }

        .token.entity {
            cursor: help;
        }

        .markdown-section pre > code {
            -moz-osx-font-smoothing: initial;
            -webkit-font-smoothing: initial;
            border-radius: 2px;
            color: #525252;
            display: block;
            font-family: Roboto Mono, Monaco, courier, monospace;
            font-size: 0.8rem;
            line-height: inherit;
            margin: 0 2px;
            max-width: inherit;
            overflow: inherit;
            padding: 2.2em 2ex;
            white-space: inherit;
        }

        .markdown-section code:after,
        .markdown-section code:before {
            letter-spacing: 0.05rem;
        }

        h4 {
            margin-top: 0 !important;
            margin-bottom: 0.95rem;
        }

        code .token {
            -moz-osx-font-smoothing: initial;
            -webkit-font-smoothing: initial;
            min-height: 1.5rem;
            position: relative;
            left: auto;
        }

        pre:after {
            color: #ccc;
            content: attr(data-lang);
            font-size: 0.6rem;
            font-weight: 600;
            height: 15px;
            line-height: 15px;
            padding: 5px 10px 0;
            position: absolute;
            right: 0;
            text-align: right;
            top: 0;
        }

        /*.card {
  background: #ffffff;
  border: 1px solid rgba(219, 219, 219, 0.5);
  box-sizing: border-box;
  box-shadow: 0px 7px 14px rgba(0, 0, 0, 0.05);
  border-radius: 3px;
  height: 150px;
  margin-bottom: 1.5rem;
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.5rem;
  height: 100%;
  justify-content: center;
  align-items: center;
}
.card-header:first-child {
  border-radius: calc(0.5rem - 1px) calc(0.5rem - 1px) 0 0;
}

.card-header {
  display: flex;
  flex-direction: row;
  align-items: center;
  height: 60px;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.card-header {
  padding: 1rem 1.5rem;
  margin-bottom: 0;
  background-color: transparent;
  border-bottom: 1px solid #edf2f9;
} */

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
            justify-content: center;
            align-items: center;
        }

        .col-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .text-middle {
            padding-left: 2rem;
        }

        [data-id^="text-colored"] * {
            color: #ff7276 !important;
        }

        .pl-2 {
            padding-left: 2em;
        }

        .pl-4 {
            padding-left: 4em;
        }

        .m-0 {
            margin: 0;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .mt-1 {
            margin-top: 1rem !important;
        }

        .mt-4 {
            margin-top: 4rem !important;
        }

        badge {
            font-size: 0.8rem;
            color: grey;
            margin-left: 2rem;
            font-size: 14px;
        }

        badge-primary {
            font-size: 0.8rem;
            margin-left: 2rem;
            font-size: 14px;
            color: #67d495;
        }

        .sidebar img,
        .sidebar a {
            display: inline-block !important;
        }

        .sidebar a {
            margin-left: 0.5rem;
        }

        [class^="col"] > p {
            margin: 0 !important;
        }

        .card-table table {
            display: inline-table;
            width: 100%;
        }

        .card-table thead {
            display: none;
        }

        .card-table tr:nth-child(1) {
            border: 0;
        }

        .card-table tr:nth-child(1) > td:nth-child(1) {
            border-top: 0;
            border-left: 0;
        }

        .card-table tr:nth-child(1) > td:nth-child(2) {
            border-top: 0;
            border-right: 0;
        }

        .card-table tr:nth-child(2) > td:nth-child(1) {
            border-bottom: 0;
            border-left: 0;
        }

        .card-table tr:nth-child(2) > td:nth-child(2) {
            border-bottom: 0;
            border-right: 0;
        }

        .card-table td {
            width: 50%;
            padding: 2rem;
            line-height: 1.5rem;
        }

        colored {
            color: #ff7276 !important;
        }

        .card-table tr > td:nth-child(1) {
            padding-left: 0rem !important;
        }

        .empty {
            margin: 1rem auto;
            background: #faf8f9;
            padding: 2rem;
            text-align: center;
        }

        .empty img {
            max-width: 600px;
        }

        .sidebar-nav ul > li > ul > li > ul,
        .sidebar-nav ul > li > ul > li > ul > li {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            margin-left: 1rem;
        }

        blockquote {
            padding: 1.5rem;
            background: #f3f5f7;
            box-sizing: border-box;
            border-radius: 4px;
            width: 85%;
            padding-bottom: 0px !important;
        }

        .docsify-tabs--material {
            padding: 0 !important;
            font-family: "Calibre" !important;
            background: #f9fbfd;
            /* border: 1px solid rgba(219, 219, 219, 0.5); */
            box-sizing: border-box;
            box-shadow: 0px 7px 14px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            height: 150px;
            margin-bottom: 1.5rem;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.5rem;
            height: 100%;
            justify-content: center;
            align-items: center;
        }

        .docsify-tabs--material button {
            font-family: "Calibre";
        }

        .docsify-tabs__content + pre {
            padding: 0 !important;
        }

        .markdown-section pre {
            border-radius: 3px;
        }

        .docsify-tabs--material,
        .docsify-tabs--material .docsify-tabs__content {
            border-bottom: 0 !important;
        }

        .docsify-tabs__content pre {
            background: #f9fbfd;
        }

        .docsify-tabs__content pre > code {
            background: #f9fbfd;
        }

        .docsify-tabs__content[data-tab-content^="html"],
        .docsify-tabs__content[data-tab-content^="javascript"] {
            padding: 0;
        }

        .docsify-tabs__content[data-tab-content="html"] > pre,
        .docsify-tabs__content[data-tab-content^="javascript"] > pre,
        .docsify-tabs__content > pre,
        .docsify-tabs__content {
            padding: 0 !important;
        }

        .pay-with-gamma {
            text-transform: uppercase;
            align-items: center;
            border-radius: 4px;
            line-height: 1.4em;
            padding: 14px 33px 14px;
            margin-right: 10px;
            transition: all 0.3s ease;
            font-size: 14px;
            border: 0 solid rgba(0, 0, 0, 0);
            color: #fff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08), 0 2px 4px rgba(0, 0, 0, 0.12);
            background: #ff7176;
            letter-spacing: -0.01em;
            font-family: "Calibre";
            font-weight: 700;
            width: 180px;
            text-decoration: none;
            text-align: center;
        }

        button.docsify-tabs__tab:focus {
            outline: 0 !important;
        }

        .spacer {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .flat-table table {
            border-collapse: collapse;
            width: 100%;
            display: inline-table;
        }

        .flat-table .card,
        .flat-table .card-body {
            padding: 0 !important;
            box-shadow: none !important;
            border: 0;
        }

        .flat-table .card:hover {
            background-color: transparent !important;
        }

        .flat-table td {
            padding: 1.2rem;
            border: 0;
            border-right: 2px solid #fff;
        }

        .flat-table th {
            border: 0;
            text-align: left;
            background-color: #f9fbfd;
            text-transform: uppercase;
            font-size: 1rem;
            font-weight: 500;
            border-bottom-width: 1px;
            border-top-width: 0;
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
            color: rgb(60 66 87 / 50%);
            border-right: 2px solid #fff;
        }

        td lead {
            border: 0;
            text-align: left;
            text-transform: uppercase;
            font-size: 0.8125rem;
            font-weight: 600;
            letter-spacing: 0.08em;
        }

        .flat-table tr {
            border-top: 0;
        }

        .flat-table thead > tr {
            border: 0;
        }

        .table-sm {
            font-size: 1rem;
        }

        .flat-table.table-sm {
            padding: 1rem !important;
        }

        .link {
            font-weight: 500 !important;
            border-bottom: 1px dotted;
            color: #ff7276;
        }

        #get-started-with-woven {
            margin: 0;
        }

        .heading-2 {
            margin-bottom: 1.5rem;
            margin-top: 1.5rem;
        }

        .heading-2 h2 {
            margin: 0 !important;
        }

        section.content {
            margin-top: 110px;
        }

        blockquote li {
            font-size: 16px;
            line-height: 24px;
            color: rgba(60, 66, 87, 0.85);
        }

        blockquote ul.inline li {
            display: inline-flex;
        }

        blockquote ul.inline li::before {
            display: inline-flex;
            content: /*savepage-url=../img/dot.svg*/ var(--savepage-url-24);
        }

        blockquote ul.inline li::marker {
            content: "";
        }

        blockquote ul:not(.inline) li::marker {
            width: 100px;
            height: 100px;
            content: /*savepage-url=../img/dot.svg*/ var(--savepage-url-24);
        }

        .app-sub-sidebar {
            margin-left: 1.5rem;
        }

        .app-sub-sidebar li {
            margin: 0;
        }

        .app-sub-sidebar a.section-link {
            font-size: 15px;
            font-weight: 400 !important;
        }

        .app-sub-sidebar li {
            height: 30px;
        }

        .app-sub-sidebar {
            margin-left: 1.5rem !important;
            margin-bottom: 1rem !important;
        }

        .sidebar-nav > ul {
            line-height: 2rem;
        }

        .sidebar-nav > ul > li > ul {
            line-height: 1.2rem;
            margin-bottom: 1.5rem;
            display: none;
        }

        .page-navigator {
            position: fixed;
            padding: 0;
            top: 50%;
            transform: translateY(-50%);
            right: 1.85714286em;
            z-index: 10;
        }

        .page-navigator ul {
            display: inline-block;
            padding: 0.92857143em;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 1.85714286em;
            transition: all .2s ease;
        }

        .page-navigator ul:hover {
            background: rgba(0, 0, 0, 0.6);
        }

        .page-navigator ul li:not(:last-child) {
            margin-bottom: 1.85714286em;
        }

        @media all and (max-width: 767px) {
            .page-navigator {
                right: 0;
            }

            .page-navigator ul {
                border-radius: 1.85714286em 0 0 1.85714286em;
                padding: 1.85714286em 0.92857143em;
            }
        }

        .page-navigator li a {
            width: 8px;
            height: 8px;
            background: #fff;
            border-radius: 50%;
            transition: all .2s ease;
            display: block;
            position: relative;
        }

        .page-navigator li a:not(:hover) {
            opacity: .5;
        }

        .page-navigator li a.inner-link--active {
            opacity: 1;
            animation: bulge .5s ease;
            -webkit-animation: bulge .5s ease;
        }

        @keyframes bulge {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.3);
            }
            100% {
                transform: scale(1);
            }
        }

        @-webkit-keyframes bulge {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.3);
            }
            100% {
                transform: scale(1);
            }
        }

        .page-navigator li a[data-title]:before {
            content: attr(data-title);
            position: absolute;
            right: 12px;
            top: -14px;
            background: #222;
            color: #fff;
            border-radius: 6px;
            padding: 4px 8px;
            display: inline-block;
            transition: all .2s ease;
            white-space: nowrap;
        }

        .page-navigator li a[data-title]:not(:hover):before {
            opacity: 0;
            transform: translateX(-20px);
        }
    </style>
    <style data-savepage-href="../web.css">
        /*!
 * Bootstrap v4.6.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
        /*savepage-import-url=../assets/font/stylesheet.css*/

        @font-face {
            font-family: 'Calibre';
            src: /*savepage-url=Calibre-Light.eot*/ url();
            src: local('Calibre Light'), local('Calibre-Light'), /*savepage-url=Calibre-Light.eot?#iefix*/ url() format('embedded-opentype'), /*savepage-url=Calibre-Light.woff2*/ url() format('woff2'), /*savepage-url=Calibre-Light.woff*/ url() format('woff'), /*savepage-url=Calibre-Light.ttf*/ url() format('truetype');
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Calibre';
            src: /*savepage-url=Calibre-Thin.eot*/ url();
            src: local('Calibre Thin'), local('Calibre-Thin'), /*savepage-url=Calibre-Thin.eot?#iefix*/ url() format('embedded-opentype'), /*savepage-url=Calibre-Thin.woff2*/ url(data:font/woff2;base64,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) format('woff2'), /*savepage-url=Calibre-Thin.woff*/ url(data:font/woff;base64,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) format('woff'), /*savepage-url=Calibre-Thin.ttf*/ url() format('truetype');
            font-weight: 100;
            font-style: normal;
        }

        @font-face {
            font-family: 'Calibre';
            src: /*savepage-url=Calibre-LightItalic.eot*/ url();
            src: local('Calibre Light Italic'), local('Calibre-LightItalic'), /*savepage-url=Calibre-LightItalic.eot?#iefix*/ url() format('embedded-opentype'), /*savepage-url=Calibre-LightItalic.woff2*/ url() format('woff2'), /*savepage-url=Calibre-LightItalic.woff*/ url() format('woff'), /*savepage-url=Calibre-LightItalic.ttf*/ url() format('truetype');
            font-weight: 300;
            font-style: italic;
        }

        @font-face {
            font-family: 'Calibre';
            src: /*savepage-url=Calibre-MediumItalic.eot*/ url();
            src: local('Calibre Medium Italic'), local('Calibre-MediumItalic'), /*savepage-url=Calibre-MediumItalic.eot?#iefix*/ url() format('embedded-opentype'), /*savepage-url=Calibre-MediumItalic.woff2*/ url() format('woff2'), /*savepage-url=Calibre-MediumItalic.woff*/ url() format('woff'), /*savepage-url=Calibre-MediumItalic.ttf*/ url() format('truetype');
            font-weight: 500;
            font-style: italic;
        }

        @font-face {
            font-family: 'Calibre';
            src: /*savepage-url=Calibre-Semibold.eot*/ url();
            src: local('Calibre Semibold'), local('Calibre-Semibold'), /*savepage-url=Calibre-Semibold.eot?#iefix*/ url() format('embedded-opentype'), /*savepage-url=Calibre-Semibold.woff2*/ url(data:font/woff2;base64,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) format('woff2'), /*savepage-url=Calibre-Semibold.woff*/ url(data:font/woff;base64,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) format('woff'), /*savepage-url=Calibre-Semibold.ttf*/ url() format('truetype');
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: 'Calibre';
            src: /*savepage-url=Calibre-Medium.eot*/ url();
            src: local('Calibre Medium'), local('Calibre-Medium'), /*savepage-url=Calibre-Medium.eot?#iefix*/ url() format('embedded-opentype'), /*savepage-url=Calibre-Medium.woff2*/ url(data:font/woff2;base64,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) format('woff2'), /*savepage-url=Calibre-Medium.woff*/ url(data:font/woff;base64,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) format('woff'), /*savepage-url=Calibre-Medium.ttf*/ url() format('truetype');
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Calibre';
            src: /*savepage-url=Calibre-RegularItalic.eot*/ url();
            src: local('Calibre Regular Italic'), local('Calibre-RegularItalic'), /*savepage-url=Calibre-RegularItalic.eot?#iefix*/ url() format('embedded-opentype'), /*savepage-url=Calibre-RegularItalic.woff2*/ url() format('woff2'), /*savepage-url=Calibre-RegularItalic.woff*/ url() format('woff'), /*savepage-url=Calibre-RegularItalic.ttf*/ url() format('truetype');
            font-weight: normal;
            font-style: italic;
        }

        @font-face {
            font-family: 'Calibre';
            src: /*savepage-url=Calibre-Regular.eot*/ url();
            src: local('Calibre'), local('Calibre-Regular'), /*savepage-url=Calibre-Regular.eot?#iefix*/ url() format('embedded-opentype'), /*savepage-url=Calibre-Regular.woff2*/ url(data:font/woff2;base64,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) format('woff2'), /*savepage-url=Calibre-Regular.woff*/ url(data:font/woff;base64,d09GRgABAAAAAGf0ABAAAAAA8+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABCQVNFAABnmAAAAD4AAABQiw6UGkZGVE0AAGfYAAAAGgAAABxphHydR0RFRgAAT5AAAAA8AAAAQgcTCIJHUE9TAABRvAAAFdkAAEaGPsIT/UdTVUIAAE/MAAAB7gAAAvq7Y68CT1MvMgAAAeQAAABVAAAAYGCxeQxjbWFwAAAFuAAAAk0AAANGnbd6BGdhc3AAAE+IAAAACAAAAAj//wADZ2x5ZgAAC4AAADqXAACH2CLGkr5oZWFkAAABbAAAADQAAAA29hOZsWhoZWEAAAGgAAAAIQAAACQGaQOMaG10eAAAAjwAAAN6AAAG5ibBUINsb2NhAAAICAAAA3UAAAOAQXNjam1heHAAAAHEAAAAHwAAACACCABYbmFtZQAARhgAAALkAAAGro/NzFBwb3N0AABI/AAABooAAAuJ0zJ6pnjaY2BkYGBgZGiWCzwbGs9v85WBm/kFUITh5AetUzD6f8d/c+Ye5jogl4OBCSQKAH9cDd142mNgZGBg6vq3iOEE89r/Hf87mHsYgCLIgHELALg/B/kAAAB42mNgZGBg3M8QysDOAAJMQMwIhAwMDmA+AwAfaAFiAHjaY2BhvM84gYGVgYGpiymCgYHBG0IzxjHIMXIBRblZmZmZmNiYmIFy7AxIwNvH05fhAIPCbyamrn+LGE4w1zGcVGBgmAySY9zDlAakFBiYAT2jDYsAAAB42o2VXYjUZRTGn/P+TbYk0p3Raf1YZ123HU030/Ljws1xkphw18DAq0oE74QJKgRFgsAQvOgmr5TIgowWQfKmK8EFFTXRDVRoWT8upDboIhnFwHX6ndd3ZBtccIZnnv/79X/Pec7HhO2KHxvgZwxc1Ap7XqWwQQUb07zwhbpCVb36WiUrqxMUbLMWhvmqakgvMi7BRc4/F+ayp6oOO68F9qtm2YTm2FXNszrzv6jd/tAinrt9fzx7TP2hV1vgsp1QPpuuYnhfs3lPNbyrnvABnKlqd+AdjA9y523GNzUrvAE/YP4WqIHPWO+AP4VLrE2oENaoM3ykt8Ig72woF5ZzzjFHS2wde7AZLthObK0pj21DNqxuu6+NdipyN750Wxdr9+BxVTSitbrc+NuuxOdKuKSKz9uNuL8Sz5Thb9BqvWbi83o7p3bsa7fTgGf7mfu3Kq9RbNjK/d+hoWs/gvZ+75/oW0DHc6zVtT8Mq8cWo9dO5o6Aur6y97Q8FDVoeTTuSLaP6yWdiBqf5H05W/34TDisJeEnMKw+dH45avwUZB/Crnv2WPcmdLtxF93fhv8BD8Mu4tTUvAV2Te+Ez7U06j4ZrjvxsUdo4xo/BWEU208lzSdBI9w7ojL8EExErZuat8DzEv1KUffJcN09Ph4LfI33tTK++/1TMvno8XX/I3tunn8GJnc9f6Zk8tr9Ccd477heQOO/8PNfNJ+O3zMZT8AZ42XwInhDzL0jnPtWa70ePCdjTZCXEdQGezYmXpM4zlO/lTBDnbpPfdTS3VOxx9R1beGsXz1ZjrHXGvme+M3Eq73+Yg1MwV6bXh//47Lyniser2dmr2tqy/MrxrZZ39RYK9uhxrVmrGOuk2+eqzFfkl2xtuvam3AAXADfg2GwG+x7cmcrJxtsVKVskJr+UR0gp6PUYpm6LUfO4W+nbSLXt6HfUhWz4+rSdfY6fmscCAu1wGuevGsPx7F/XCvCSfh39YUxrQxHYfLce2fsn0NoMURs79IHgPco7LwIzrj94ZXYH856XwA/JDR9/CT2k7q+TL7uT/7uif8F9IumbbH/OLxvAu9fsd9siz2v1PT7yf+E91jvr/Q673Oxv7fRf9q0CmwCy9L4VeBrA2mtD8xP6z5+DbwOem2aBsA6sDmxmM9lRfp9m/r5bo+/H6tGx6jxZfQf08BoZQAAeNqlk1lQzlEYh5/3X0JURFrkc74PRbYiUlSkzZqtfd9kj8pwQWXJPtaxzdizhbEmmonBBVfu3Zi+f+5dcKcZx5mvxoxx4cKZOec978w5zznn93sP4EVfD0fMiMwzmXhyb1EmpjKfAXjTSCu3uE+7ZEqjnBZthVpx1gfrs6PF8V2NVGHKoVwqQkWrBJWqHjiDnS7nGmeJK9CV6SpzVfdaWhua4pqh3OEhHbLYUH5YIYby3vrkaHZ8UyNUiApXykOJ/01Z7Szsp1T1itb6i36n3+o3+rV+pbt0m07RUdrvZ9PP2p6PPeV2ip1sJ9mJdoIdY0+ylbvTneVOcwe5A7qLuiO7h3X7+dT1vfS/m4/l61GMv3iC1T+z/sHo2+ll9B2ADwMZxGB8GcJQ/PAngGEMJ5ARjCSIUQQTQihhjDbujMHBWKOnExfjGM8EIohkIpOIYjJTmMo0phNNDDOYSSyzmE0cc4gngbnMI5Ekko23C0hhoXE5jXQyyGQRi1nCUpaxnCxWsJJVrGYN2eSQSx75FFBIEcWUUEoZ5eb+e9jLfg5wnDNc5AqXucp14/QNbnLb4/dd7tFmqueBcf4xj3jCM57ygg5e0inFbKGKamqklHousYn1UkMd62Qr+zhrTqiVbVLH2j+028AOM7bynF1UesScK7UmbGSnlFHBbpo5Lf4SINmSIwVSKLmSR7tZ0SWxUiXVUiGVUi8NUkKD5EuRlNPEQVPph2jhCEc5xmFOcsrsOMF5LnCOr5ImS9gsGeYXLGK7LDVVnP4LcIGbTAAAAHjaPcF9ZBsLAADwuySXS+6S6+WSpvm4fDQfl+Sarzafu4981tQTFTVVMVUVz9TUVMVUTFTVTFVN1BNRNVEzVTVRVTFPVdU8URNVUVUzVU/FEzVVNe/99X4/APgfCXiBKaACnIMk6AQTYA5cAFfBLfAzeAy2wJ8CiSAqeCV4J6gLboWAcFhYFG4ID4Ut4Y3wQcSIyqId0SUkgMxQFMpA89AKVIHq0Cl0BT2ICXFYPC5eFm+Lr8RdGIctcAJ+Ds/B7+Aq/AluwE24Dd9ILJKspCCpSb5J7qS0NCPNS99KN6U70kvpL4RERpB5ZA05RL6jIlSNBtFRdBp9jX5Ad9E2eo/ey1SylGxW9l52K8flGfmSvCo/l//ABJgRG8FK2Cr2EWtgJ1gbu+/Be2I9xZ4mjuN+PIvP4zX8XIEovIoJRUFRVuwpbhSPBE44iSxRIGpEk7hXUsopZVW5p+yq1CpGNa2qqPZU571471hvubetptWL6lYf1TfWt9x30NfVcJqsJq8parY0F1pCG9bmtEvafW1Xp9Zlda91m7q/9Ijeps/qF/Uf9N9JjJwgl8kzA2DwGiYNa4Yjw08jZZwwlox1Y9uEm7ymadOK6cTUMVPmZ+ayec/c6bf05/s3+n9YdJbnlnXLlVVk9VvHrSVrzXpivbD+Y8NttC1jW7Ct22q2Y9uj3WIfts/Zq/a6/av9kgIoMxWlMtQMtUxtUvvUmQNw0I5JR8mx4zh1PDptzhFn0fnJ2XaJXG7XrKviarjuaAs9Ri/Qdboz4B6YGagNXLhJd879xr3rbrrvPJgn6Hnh2fQceW69pHfUu+RteK99Kt9T3xvflq/p6/hlfs6f8xf8Vf8X/9WgYDA4ODv4dfBuaHRobeg0oA7kAnOBpcB6YDvwJXAReAhqgu5gNjgf/CPYCN6FvKHfQvnQq1AxtB7aDZ2EumEy/DScCxfCb8N7ESSii9ARJlKM1CNnUUt0OXr2ZPTJAYMxJJNhXjJLzAbzjXlgCZZmh9lxdoWtsFtsnT1kW+w1J+JwzsnFuCmuxJW5Xa7LC3iCp/kUn+Un+Zd8iX/Pb/Db/AHf4jsxIEbEuNjvsT9jv+JM/EW8HN+P/52QJcyJZ4nVxMdEK4kkjcl8spLcTh4lr1PIf7Opz6njVCvVSavTdJpLj6Zn0ovparqRvv0Xu4kVmQAAAHjaxX0HeFzFtfA9dy2tLMuWtqtLq5W0albZqrarXlYraSUXSbZsgwtyr1g2tsHGgE1xMD8lD+OCIRhMIMBPCSbGj5YAIaEGTAshkIBDEjAlJKbp6j8zc+/uvVtk8773fb9s7UqrOzPnnDlz5pQ5Zzieqxz/njvAj3CTuakc53K47DajPt6SZ1XZVZU5RlNOjskYp5mjTS/PzS3PeQ7uFIY5/OK5ItjDfYjtVJya43ROu8GO30XNzmbY80f8os+Y8KUIn8ngcjiuQG1RW9z0222n33Y1/cbPrfgTjCctK2ktubakpeT8qQvzRshvpdeWtpScl7Qw74G8a/P+Wfd/8avu/4hv+MVxwGWMH4UT/DHOynEmZzlY7Ua7zeV0VECh0+FyI0xGk6XQkhdv0BtzwGjQx6sNf+hcOK07d21N+/DIngX+tp05XVkrHY3TKxbuHe6aszihv2Wes7zVlGEZbZ0TN3e+cceQrSy/aGpawUXtQwmLOS6OM4+f4RfyaxH3KZwOsbNwnB3swOuNNpejMI/Tx+cVOlw2Xnzn8LN4/Nti2OEVdraVesvKvPBuz7qennV/p6/QST/jR8b285O9pfiLsIN83gNm+jZ2mn5IaWrFsb04toXD38FSDhS3bMgBl9serzZZrDh7FHfygrOpsrmt0wDRh4f8fEVRscuoT/1FuqpdZbtwsce3dHCd11Z1ns8/8PQMx8P55R3wrrXKVmIoS00/Vt+9bMbWRt+KGa65qfWejlmzhAz3k9Oai93tSHcy/6vo/NPZL2ol846fZ4//Akr4a5AynCvF5TZMA73RZCjMvn7brNWrZ227AbTP5fYZ9n+w39CXS+bPhM9b2PNcSrza6QVHodVpBIvYAI4Ip+UtSJscWAnT+as5DY5tdZtweLdJbVJbDRan2rplrnG4bNg4PEzf4DtnoWPZMgcSo9CxfLmjkLT3cUvgdThNxtQh4xos2NDitH/uvesu/A+nyasXn5s6/lNuDzdCnjNRctqQgZJhakNZTnm20blyhbrUlJ2TkWkZYnAVcX+BNCgiNCGcV/TlX9rbyee5uMb2cMtwjclWWC6urBxcYWxl0fZxSItOpAW2N+nsqrhv/N/M4t8fy6PrbfwMfIXzriZYT8orTEFgUlSEr+yE6eDCF3fseHHHx75AwNfZ1zf5AUh/4AHhFFy2+/3dV753JYMvDV8FfikXj3hrLBq10y307HuUXzp2C5/Q2zefPpOFL/fjOAgRzgQyl9riBTtBfFp8MpgNZqfby8PservLE9c/edWswSVqtS4xO7Fg0kEoENY+Nz23AJ6uqGmpHlyxIDAt22hOyU8qjru33fGuLb8Z+9cgHvdi/4WUb8hSLZSNEa/ORlbFZWO1ZwP7q+WxYluTZ6RR3TNlVd/ABc5SW+3KRy5M6Elor3G3drggrcVdOb2uviqwaL7f1jN1Wo+jd+mSWS6vx26rx/GMiMcp5NNp+K4iMopNt9mpgxkf/8a3apVP+PhTfkRYetNNzXv2VMMdVKacgV9im3SEMU9t0SDWBheDz0JAYyT/rAmXcZ/wVWnb7FXrBofWTekxrHe3t0OXE/rbf2W9cM7gxkUDG3s29nLS/L2GeCdyBcgd4qwheQsk6WSQSIDCly3dHV11tV1dtXVd4OvNnN0yBMkDrsF1G+ZdUpt/yZJ9v6nv7dka6D05eOUSlUFVUbt59uDm0e51Nz3M5lqLL4cRh3iCt0Vndprh8B8D7wi/gWv54rG3+Nx28pyKy0O4nkW4JnN6IlHcIlh6o078CUHTMYFSDkyiBKfpX3V+f12t319b1dhYVdnYWDl3c4uzzLWyr3+lu9TRutndvKypaVkzTK+eW1MzvaxGuHFRb+2sacldVb45c3xVvpRps2p7F7H9xIJwvCjRB0QYkEhxokAvdE4DJtjsNhMjE4xKBBKORSEQ/Cw2hXi2JuFniLdOvir5iPWZo1inMEdartgHlQ/YxxTOoJQQoV4kWSH1JpMZ8CTrCjgvtxxG4GO6Lp0FBrUJeaHo9Gngem/u2Ly5g44V4J6Hd+Batt+6nWZDAX4H4BphE1zzfG3tNfX1bN6bsK8VrC8wxDndViesEN7CznqlznhOP/497KNzXirHXUeXOF2Mbq/KKV/994iEeEWVGKeLS1clpxTzXXxaTlypVldvd3pRFKyeObhEpNFvk0ypKemJWZNSUsoK82158dNNJYaKaiIT5jPaj/CneBfn4BoRSnW8uNDpRsbbbW4DAlOuCjIbWXOyyXer3eKuh5zBV5ZOrnK379v8kwerz1tZv/GCBdvqVy/sLHnj6A2/urAv35WYXJPt6VgaaMhEuk+2pjuaivOdcMm/XEsGV13+6E+6NzbklNdMT3MGLmy/7d27d1y4PScjLXdW4+zt5QWnLjZlz6kpqmJzjTPMN+B6UiOHcmDXWayoyqBEgbiuL/o6xtr7QL/kt2QH/9Wv+EnCd3Rt+fDJf1HZY+Cy8We6aEpBw9AqsNucDvzNIKIPV1R5V53//u/OX2kX/nnJjh2XXO9pbvaAd2qfY+ZcfmRWwNGmWbJI+OaNmipbNZ3rAtQFrDiPRrrXYq9BVQeJaCckKzi06bxLdL0lm4dWrRq6qLhXd8l5m+7CrWFkcNOVa1ZftXlohOCGcPLVFLdk5C0qmUpBRcBMibfsG102umnpaODZK++448qOHe9eOvYBP3JU+OQo4zeC46s83SN1RE6K/3xwpfA8ZAofQY2whR9pf6b9tY7g809RfZOzM8mK//YFYLPwNhiFf+Cjr7RLuHkQN5TBBbg3MzZgLMGwpNIBvrrx/WvXb73ttovO36ELlF40d+264cD8f7aWbL3p/r3XUjTfu2q+OC7fzOAEO25+Zvy2a8zwr0BAuDMQgGEyd5AqfIJ7wbfseW6fqN/go/sCVDsboTiQPexnbE9x033KiV1RADX98V771sDq4Tkr7nfUXQv7hZFlq5dI41tEOmnAPhksKrUB+4XsJcK3kLLob804gvAS2IVPhIcgteM1cSxCL/JzHNKLAGzwBaAGYfmwI0h//mb8exLHmS0qglQGxQ9+4nrGP+fVVwb88IZQhl0nwDeI4BtSm0I2B6CxAGkEGr6wVvh5tx86KCE+EVKxzXR4nfAHmYs+Ki90VEuzEPXDbtMGpTTfd3DrloMHt2ztWTNnaM2aoTnwhPCPBx8E44PC0NtXX/321WwNEVy+peNqyawi+lTyuAm7kVUAFTcHTp23clV2k+enP/U0/ec//Mh5D533mMvzsYdjcLxH4ZhGtJQ4qwQHLia1SRUExo0qoQu+tjX4KEgH59iLGVROK8pnd35DPgHswT03DjdC+SoCnaG5qLFZXAfJCN9UstrBorGIK1Wts1D4yCKNWx34aMHKGV2/nCv89cb6pqZ6mCT8wI/MG/APJQrf8uZ3a0dqmV57Bt5CWPMIj4hbGDNK5OuUmSR5haY+yxaPv9yx5sYNQ/M3aAPm9dUdlbblt2w+vv22kRpbQcXUrMKLehYO+s9zlxeWTs2wbp9x/hw6/yhX+DS6dnHvMBsI0Nnw/ZsB3ODbcaVSHbsB5y8Xn0lBquEiIsyKlgpjWqhYdUXvwL6BwBWTL9sGG4Sbz8cvWC5cu/Uy2j+RezVMj0D+IswF3V2fzXzq6T7kDx4E8gxyBf8p40EgT6gsU5C97TpY2HDZ9u47Onde3nFH73Z8PhU+Qd76s2AmPzP+RW2WzxLXpQqlqtqiU9lNbl7/2rtz779v8J3X5h65C59+Q3juu++gGso//1zZLgF/QV0ZVTqUxakPzvqg9/0BaIU84eaxMVjOni3Gl08ZvxegAguoDBkAPhU8MF+4G44LRzo6auBv7dVCmrimUA/PQz2c0FRjJ2xquP76d97h28fuaeXfbw3X1TMQ2T7U1flrxvL495lNw33B2ps0KLzw+25sn8IPtI7ltYrwwxGYxeiqs5sI3nu7Lu6dOROlwDOXXsqe0Y/fAMPjb1J7AEHWQ8ea1lb8/F5+EvjY2GCx2sHXNqeXn7Rb1KO+gV3wLFqlRWTGZFqT0UQ3WUnXVjtDu6gLdnVOay5oP29Rp7kx2V7RbuiaMtwYmNuZWGcp83rLLHXm5PTeRk+vcVp1qcNT3T7Ld7w8NaeooLA4B8dsRl5/HeFJ4TKR2wm9NCFltlBloKo8XZ97u7u1rdYFK1YssLZqNZ58r8/nzfc4HPw1gpBu2bVo8RUWyH4kzzr8f4atjAZELzyM+JgkTcXEbF4KNtvkLOvm+uYn9SQ4i2ra2mqKnAk9SfN9cze/fGlvU37xvBvmFec39QZ1zEckOM0K0iDIVmeoY1gWArO7OwRouuWKxYt2WdKBH9t0hQxO1vfdCKceKc8V2GV9Z4GZEgCNNbW9HGC4I2mBb3j9urlzFgnPQUdNSc0SW2vCp1C9q6lnx9ILLt+8OKN9ZjEUNNc6RRmvxxczfyOVSgZCxiyw05WOvEXHALMuM8+6ZEmX399dn8df3ZpUYm1tFK6Aixu7mrpF+LrhIYQvnctH+JRsIW5e1LDROCU5CiPaFuv8FSvmW1u03avn9C2e0qVbuLXQ7+3o8PqzzWmWK+YvuDwvzSYsXbG6t20mcA+2Df1kkMDbgi/3IZ11bM9ivIDgMo1S0+I3tBV3zeiuqrJ6k3Dmv8ssGOoS/gSmypqKfOF1Rk+i4dzCb6A+FroDu0Rvyl7/QFZRZmYRnBBa4cR+8mMmx49/Nt5Dn08i1NJRhKxOI9magw1bvIYp2oT6YHONt3lSo6oV/iF2wkmw/5r5I8xWNeVlt11tgqU/r/T7f7/4t6+8VH4YYV797FM/SM9ze9laJFDu9aMU2IS/i3/jr0eaE1vapaSB7Ac7sS1hu212i6+7pCTPlehnr/7CGbNge8eAT3gX0ivdpfnCy8H3Ew6PRGfsn9HZMCGd4UR1GJkZzz6O7aneJ3mttKK3Ch5f/+j69Y8WtG1qa9sErS/u3PniTuGVm4aHbxom89MyPgCvY9tkwu90zbPxI5e8369rYWupRRdaSe/zI7iadv1ml2LBE5gG4GGp3zjGp0E2VSmWaKhbvz/Y8T3vs17THbjTlEs9M1pZab/iGmKkJzCDVZubXz3F70+uy8+CJ3qSyqzCm3CiNquQ+rPOwBZsZw7t47G38exew6xiW/PQyrltnUNJfn2vxZZlHlg/74bFW1vN5ukaU8bcWl9zfYM5x5g22ZC9wNtJdd0UHCOVryKc66ZrmnopNHrRFCoc6uz0r1xZh1ZjSXXzOkhqHB1tFH7watuTPZTPPNj+TjhB+ACVOXFt012eyEgN3Nmtby3u6u+urCr0JJF1Q1kBLMLfq6rLC2C65C/4JfYh2+cTun7Rf9nOADa4A+aLz/CL8Rmyz4e2+QyA+cOLfJf75s33Xe5fNIzP3wczcXH2Cw+wn6X+8Ve6z6vpfue24j4Pdx28c/a2i/uPHBhYdyGcePPUfff99Z3Dh0UfBvICgYnsoxY3Beq5rpb7+i/f2XvPUXhS+BksCO7vu/E5cX/XWXCzVMFu4Y5vv4T+M42NVeBvrBJ+Ke6pv4B6XJ/ZhGv1dWBAWnkA7TCn3YbvLvpJFujVxgfyly+r8lrKyy3eqmXL80tLX/5VQWtD1bGC9oJjVQ2tBb+yp6cH9QXuBtFvh2T3+USvneTfbBDHczrcwbFwW9BLY8XTT46UlipHNJAR7IpBJT/jy7AVZlCa2smCI6vCYKE8iexc12AvT7eVaErx3TxTVwoBD3Kft76V6LiV47dxB/gpzN+vDdr+Kp1dJ/n7jRqXFp4oz8kpz0UNj3r8yT78c7iVzyeat4s51rMhfCtGcYm7x4LettqOyX61q5hsx8UutT+hs7at95oTF08ZHErsqS0swz25rLC2J3F47hTmz8WXl1FXRhrpqH9OryaORrvLA9IOJ661x/fvN0GRMNNjnDlzcV/HUKJv2gxbNfx82LuxPqepyerY6B0eXBtoDnSI/k4YQx3LSH2NlH9UpPugx9fZseO+Wbcd7r9vx6FDh3oPHYKEOlwVn4FO+FNde/3u3fXtLI4xfgAeQPgqOFxvBQo3INXqqWPMHSkUqL1vNeFD5VAB1E0PK1MG2rrmJPq0M/LL07J32Oz5uSmDbb65iV3a/vyK1NztVY6Cfx4sNxqNB6cbTEMZeXVtnd5Oc3Zqtm52rrcsv16Tni99lGmYldtQlu+9Zvm0Kk2OJnlFMr5p2f65i58Ka/gVXCLRGnSSKyWv0B36cVeGXpeRUZh5bbpOn5FZmM7X6TPoRzrxnfgwiO13iPqdk4lnDq2/XDS6cqVdIj/MImcaGX/oMeGbxx6DhOtv/+T22z8R/jgSaOpP6tI3VtbVVTbqu5JmNAbgceGLRx6BlEeEntO33nr61iceWtNWW9e5qbOuto341qAeEvh1OIfEZW9xBs3/ibTYhKZUR0VDU2VpdlZGyZTGhMaK6oameIs+zWJJ01ugyZBuKyt2msyp2ZZiW51jY8ZUrclgNGlxvDSuC7phA9rZyJNui5Vs+vT18fZ589rnfUZfu25iX9wkLg0ALhf98dkk+iTtnyZCGQMxsKyEy0Tz1OIMGrmXr/ivFSv+yz+4fWho++D+tJJZufklVRUp04qKpqXw8QeXLz+4/FjL4GBL8+BgUetT5uzyKZ07k5KdyWztX8drYQkfkOIu153ktR4Pwj8dNoNFnCdOK0aijCJMS4qqi4qqb+4c6ewc4ZPJz8WaZZ2dyzoZr/RyQ6i/xyPmycqIiAoF6ZfeI0e8d9xxB+zi43d6d+70Cq97vQwWI6Rz3/IryTrThcUKIJmoqE63Fx5L1xvT+ea4hkpbrVFn6rr2L+syjLxan5ptrKx3TteXGNO6XaWjmWJsRw8Gbgz7lMUHLIoAQfjys2xINWVmGA1ZfEN8fYW9Lk1v8zic3rgmdVVqVnYq3FuZatSnZRqm1zhL06wJWndZTXWVPd1kTKPjyWwpncVt/6KtTzSlkC7J43fBbdQHhDtenIa4VQg560CDlu1vZmzbNqNhLv/UWCNc2bc/MNZI+8vjXuWuBY8y1pMnen8/D8V6Hh73QcP4S3TPwHG/62juOnYFsaWRpvcoYjT3NAyt5pcKD4OqrNHF/M5QC0W4NhR6m1HS24p6twcC2xOLmouKmvm0qwYHrxp8bsDlGnDStmF8TjZhthV/EY3PVWRv5VcgPCqUJEixyWCBAgYXqEPhFJxpvkaY2QL3CS94h1bB5Sv7qx2O6v/awLxmIEIvnHq9pcXZ1lbxDvWPkr43iH3nK/uOyU6KYQ6k6Y0ZfFOct9JWx3hrbbopbMjdlNM8riCnZZjJ2OVEN0c+I1BUs7HjovJbMCAlhmziwtA+n8GzNtWYpeBCU4ZnWUOQC29REuREVaqBMmUtMmVRgroobXpNTZUjoyxtfpBCPJc6fjMcpHt1KZ1nURVWObzxDcB23Gkqg8wSLoT4c3PUw6eUE4XqCT31hE7U763SUL/3NIXnW0VcD3Lvd71/3mDIAw63jp6tvVvZvrG7L1Z7E22vUbZnWqSyi3mtdXWt80K98GlbOzq2BvvR0X4ylf1QFapQrkHJu5xaaS1Ib03Jq7IWZLRocmVda92N1U78RjpNEvvnaP966u0PjRAKB4VEgmKMt8Rtd0M623plVHi6ELdo8X9oHKc4ThgmhFFpECpeEgbyUZJsXTb8X5JemJ5eKBvig3ybLb/AZqsmg6SzWIeqFOVeMtUwZV59pxjz2I1a4VuQJHwNxcI176+bAbc98ojo5Mc+C4W3OdFf6xPjE+kxIxRE+EWLUsxHgaiMVNx/heRDfhX5SUUtOWRBtQw+qEEWvE0Rejg4eq8YfIho67bHydtWIfsJ/x29sdTWhFJTq4x06BgbKgIe/5TYkLZWmUQeZH1w1I+eI9e+Q2whx+ZQGFd8r4DtSRljeKX4Cj/+FfGbUBzVbAdBXca+L9Anrk1+xDVK54aYEv9UPufG5zrENSg9N/4lvn6OeBMZzZ5j+O4LdIXWGj/yIEWRU40Tr8jHKrJypxKfHWlRGAXPfYGeKDzPj8xRsDuJFeJLB/UPm6hGwKJSpaAxiXEqIopzq2l06tkAi1Vt2waZLaAmQSrIPLnj3UufbpHiD3whygAN8S1AxLI3BWMhsFe56PeLoRFVirjkR5UhElFP7qP0pHgTzowWKYHFOBHgCQuXIKMJ94VHTKL06bZro/U5FyftwLl0GezTRHkwPXo0RxSsEUEdF5vw8NgO/44492LfjL4F0SgcFfrrlbR+OmzUIM2Fv0bGlCaJY7I1lUX08Giryhhl3OfC+O+v4QSUL7BTYUMD18FdBtfB76h30uo2sQNIauvTW0sv2lq6Ff9fVArWLSVbt5Zsob8T+pSMf8nPRnkonhlrACmibRK1WqtapzcBgTDOYQWyr1dXtx/cstBXUe5qO7h1YZtNa4VMe9fQGri2UDhV6ZuzRtsxePmeB+vrzS0Dl+15sKYBms/3wgXlV6+a7xUOlF5N+Z7Gfygf6Rln6iKiQEPIllYpEoS888OpiGhQRD9uuyqinwCy4rZz68fEpRCujohISft6MDAlCpqI+JQqV5SrrD/GA/nROSAC0sfDpt8eBFo+72MzI4NiPIs9IR0SqCdMij4RASpFoF5FMoSiUFSUyuKfUwj9WPzTEBkBDdwcCoFefjk/ciGLgZ7yMp/y+HfwLn8j4XTmXxD93FQWhhRY6gYWLX0YqO5eMVBVkGWva5nZUVJSWesud9d0LR7on18Ba6ee3z68VNOmbd/e2ewuL3V11glV8MrQqjlttnakLY0noX1E4kllPyKiRLXDs0WV8tvm9MaOLMH9u5kO+j+HwX12GCrQ4jtnGHahXZbHVSDtGZPqzjnAljCvyettmvfrs0DD77pqaOiqsW0TxNskWC6m9Kj9EfTQRWq6Z6NOHArntKZpeewtNzZYvMXVWOvGb5TJDD7me6rivLH8T+dMvPVhjqorz0bEcEfW2NsT0FOCdz+lZyWxBs+Zotpw4/ts9FRTHTyBquATEFPXVVXVVbWcPJUePKfHH4dnUcZVEQjdaPI56U7GYo3Sqd86kAFrihJ+fL7EM3V5mccFL3cknedb4fYsbB1e2LXGVtFp6ERYV+VXD89dJDwLndUltRfYWhM+46vdZQUdhV1FvU09s2b6PQ3+DApuf//mxRkdM0KBShK78Ymx2ozY0Vqi8EeP2Dahyq+M2hKVn/L7Gbgb179ePEk+QXTVSsROzAhrEsqbKFHWHcE1zsZRcanUJ012uIkiudNQdCTFGouftHvs+2gRXWkcIksyyPkQSZZMNJSOiY+9MUejckPgogw4SRyPrccS5J9Y63ECAC4JW4L9MQEJX3vC/CgwMbviOkprmZ2y19+NM8Qiu53sPEMTvv45+BzOCInb7UbC9/uRwi+TJ6mdQuyOk5SmxE5hFEWFXrOnq3H69IauTj9SaPbsq15gDVTjY/R5RpM0/CAqRUgHqnSKecbFIuYGfwSKq2inYjwVYU0j0ULUCgutTrtR0u6Y78ZkL7RKvvM92r5Kx6LpWbM1DZevf3T9moGGIpWx82IWcD1dkV5SMCknM6vCcOPDyy/b8eKlZbZO4bKb5s69aQ6Nv9IY+8Wo8RREj/5GCntFPPi/lYI9IjzMb5HkuSqIF/E36iIjxXSrl0eLDWQSFRFj+P1uWT8sb4LZM+FR5ySc2gFZXzjJwnFF8Fnqh8z1NHq+m812RFdatmY+l/fGlsmTymg2F+zzYoqjORLHKFunHOPUMGoqkOcbJVKKa/Fxke+yyNxFX4vGsPG3ha2/h+VIhfPjR2H08nGz4XUYk+hOzonRTQvH4MV3H1xzJqskO7ski75Cotd7L/khW3iPvlEaFY1/BE/ByYnslwKHVU1kfYHe5CZ8WFRVtX64taqkuNy2fri9qgzyjY/llNe1C4L+sZyyunZo8Cwc2VngzKpvmj+ys7Dmu5qS0+nDXbVFn6UP0/VPY9v0LIkpenSbSnxFhLtRlCFhUW4iUEL9qSSL2hQtYp6CXFgv75PJmoi4udQf4cX0ICdG7dLIuPGkolfKji9EdqwS+2V8UhyLS6INtCOMU25RDBhFdIWPzbO4O13vU0KRdyvSSoq+P4LkkSLwopym50GwTeg8iObHnQdROegRMOWBEJUIywqERUtizxI0BVHpIcEnHA8jggTsjogIZ9DHzL8XzUfttBsUPtSXTsocp7d7PDLbIPDj7RPS+9k0xsdOTmCdnEAIJN+2lsKfqoQfobDTsfAtXoHJYkdDTW56Rm6NV4bRwYaaHLM5p9Yrw2sjxcvxI/Di2ah00LPil7nMW5Ptyq6ZAMtbWzx5Vmueh57DH2/nfWhDpzIfno6ktknnZJwOL7jlB/PNGtM0U3p6riUlxZAqIv4CQddl0aQn23T52drijDzxxD7Zv9vhOtRfk7gackZOhpFpAtQ14SBA/WQJuXRNciNFPrchxVbh0/ko8rkaI8KTmZuXrFkjITkQgb/wtjOfQmnJ0RZnSuewrSrNhP50XQx/+oHuvkGlP52/c1TUWQ5TeZjB5CEXQ2+n2q5wIqrmTnTdzyLPWzJ4TQhvVmx4mciMBvJh5vdRQi06fYJnLg9T2ZsdlL18LPD1TP7eGx0BZnZ/FQsHHu0ucpQ6GGDhomMDK7MKszKLMoXjUfDhX9NlZen0WVljT4elYARx2YC7Uk5s20lScaLbT3vp2EoLij8veLZRwkWH9CJZfuT4lV0dC5FURnzh+WiI7N/S0bFFSFJiIeGwW5wPtYWMEJOd1s1rJzMifB19QnZfddXg4NiXYROiYrkqFAeq++kYFqqwpJV/M+jvkOeuMKjH7pOnsFC9j2+n/K+nM0xsvolOBvMF9eb696OeDoZTR8Y2RT8i/L8bxyB0/hRhTiXeTl3wvGCYjNLIoP5hVXd1dbSj1zDumj3bJUAQ7M3CLsW5Zpbf8x6LmZETJ/KY2dGTwkuKoNRhj6dGikVJdm5AsqdJ64ns6StPQkyrUuvxCBdGPx8txea03FR64kux5Smigxppy2sYU0C9X9r1HOGwb6Q+B+vEPgeXfLuL6XvgxX0uiv9hrWx/Y7gQeWOQyxsFHk1MyHyjQEISLjvCcdhAcbBMiIOUqj4B+HTMKMC/JgkYcg6yneaCZSkipJaILVqeHWbO1gU3Q73wBzFkWlUU2vnMIs+30/P18VwJycqlhFfFR6BDcuDj5cOdZuBP0RtkWBXXTu5ItPlT6cD5sIvgIVwUH0KtoNrRY89CCApyquQ8RuSOVpI6yfLQ+FdM4nyuZCwicSSmkuZjd9DvwyTkhH4fUUqWxZwWJifHo/lYWA4d7r/xxKINeaxjJtMtZDi8FS2njgWxx96ISK2jeHXDQ3QfNpOTKtJI55RkUMi25d0T5BqIm/MtsVMOgrgSGVAULgMmQrkhKBK2R8M6JBqE/nDMJbw30pyKynPMqlDoxhNlWEwW5UXMTAu4Lyg2gvgTuZEvlxsT4b4uky7dy6IiLokTIT4W3hvQ3sgj9o7kKzm3CbdTQRKYaL4HKFxjv4g94QRfN80PTSLSOY7lprPk64lQTrZqjVklmcasR6Ih/UIjn6o1ZGQaTXlV8EgsvO+mPGYj61cMwOFADXCO2BdpTVlGQ5Yxa8lEFLi7iU/TISSmdHPV2KaJ6EDzWqVzKfLMVimMGkxw3RM6ryHlucJjojIt+hNV+exUQLSsHVFRVzgRfyJ2GZHDo8pnHTO950rcE3Si3oNzYw7qKyRf0WR2mnPdCF/A7RYhFe6E+5s34VezMOPrr+H+iy5iZ0MTxbyiDJnWE+H3tGgSa/yrVsmg9DMlZ5sSRBinfuN/4OsZlOvUiqZ+6AhP377A9sgzYPzIPaHjX9jPt/j6Jn8xp6H9SH2opT4IXHeX52UbnIlpPHl3Jaam+omTtdqJ31dJfmxy7pP7I9W3RL+4FfHcF2g5yQatoS4HfC4FX5+mupXsub1++4PMez4gPkf93B+hXFTRaikEP4Vs3BewKvwA/IhD5gLAcVT4+jLKOOoZ0dK2dhu+EIRunlftrih3N/rh6xaPz+fZRrEArmy8nSP50TQTK9JA1+zL1ZqCez49r+kokO33PLEl8rCPW6jukhmjl2BeV65k5WNvulBymNx6NgczxQhO5KTubSqenqthNAnKy32BQSYVGTFWilKQC+V6IYbBXC9Ga6YfoPw9j+aEayOywkla9ssz4j32rYFVw3NWeAKy3HB+iphWzk3iqsd7YIWY85ZKYwiyvDdTWE6bRZEN99dgcptel6VMjns0SqIbT3PYv0O5QWoThMMrbuCyZHa4kq10OeAnJNlBc+9Y7EUni73IwJWCMCKQUigmCBeln5vmxycRD5ZJLs9VsnT5tyX5vVaWNy8X26qKiBx64pt005y+yL7dshS/h6W+d0mpfvKOX4jM+4Nfs3wmMU/QEJEnCCeeZY+L+uNr9OzMZBbHUtFs/oPdfYP3k4z+g6M/fM7S+nmuGVv8XVWmjHntxSeH/fyx0Z+J+YWUZrQ2QBLhOQVeVtr53ySMXsIRFMhIBQR4zj3u5vZT2qSE9UGYr1rqwepXUHlmCAaxPgHFi1jPQIeGJjSThb/huPDMEcLh0ngtNJdVjOeR50keK3D49I1+akCH9RtH7E5W+SB0vJXUQHAG1+mHHWCn6zRT9HOQMTx0DHF964It9/q/Y8YTS9MUHg81pLn08BHN/+fcTjdhC4OaHnvN9gb270eN/qK/+NIgT/jB29nwh47vpTbcn1i+qM6Az7Pz65rb6+v91dX8NZ9aW63CXeCytORDSugMIjvTJ8UfpFOHgzjFG6UqDAdH7w2vwyDl1QZjFxAl7gepxE/3B0WO7aTdY5siE0AlHqK1IJKINyUubP4lwBIlNvhMhE655CLgRL68j/pRcyP5MgLgl6TOfyWHWcGusWAXz3PGE94V/VkychqYzPq9RFFmjSmAlWi6W4zfMItMFY2sW5kl9h8FYZn1tTUqfMQebqO01ZJMVur6EkFDOWvJg0SbA6dQOE6A8z/kOtxrxp30FQm2sV++yc579VBaZpIMFIcycRXhCwpZWMh0HQZei9c0WauuL4c2UdkRAbyHStzgWU2qZ0wVNTNDtFOSr568N/xc5GGP58PIs6osrhkIxRixv7AY5q6TC+VRS63H83JkHJad59RSqMzhllw0CKE2qMB8EA5q0Hp7LwxgCd6NNN6bERnvVZhp8kivWjTLwuLbj4dssUnBc7uTqdabEeOULVn7+B1xzHZ9U0uzu6m5JeKc7YLR0VEuFENmMjSZzp7YV3gI/JWG5iZ7Q0tjlTKgvjs8pE7sKSR+Ej3zT2RLyK9BwdahXUE6VCUJb9Jj/yVCC3WptrYuGx0VfTZHIfXo2IfwzqXv7hD9ql/ROhQW4rGJYyeUaLhY6a+ZBvlSwJ75PPjqNdWu1cPr1w+vdtWsmiMdRprckbRA+Iwdjphqa0n4lK+ePDyMSMyfL/psmnoOscnopv4P5itOxnmYys54RK/oQo9tRlR1mUQOcEZWdtk2KsnhUkp/nbg/h2WU/wFF8CRZUjnS/EV5WjmBDeWuVGsmLxZsKrnsjASyS5KcUSAdM8oEKMLsRJlspTI5M3yfDwPeJfX6jAwDuTjmrwzHhdJZR3HJjIVLBVD5HIlFg3isPBKHLURgI+wuUhGOymhjUEabwpP4HUw+O+Rkp+L5twpoWT7vGXgL+SKPZBmeQ3UeurxiV+j5HHkldpUevpvyDK0jQHmmgPEMnLWawKdkI38nZkkBsqt/EbusQBBPE+JZfG54iqp7bFT/w+ZqAmyfp1aBhC+xCYqCNoHqrCh/JR5zi4008wX++yx4+8TaS/8r8/twR3NXbIyFb69g8+sT60QUnEulCCKtY1eL2IMjxqwY8fUVobkluk9xMAoGZ0f1bTGs921sdMXoXvxEdaek+d3N5lfSm86KNvSyVfp57AlmKtXXsSeYjO2mNa9orRelrSiWwDotybBxUgtLIbz+LtXF4rkUlIms7oY5RuUNReeKMhx2aQRlPY4xudSlsJL6XGK8UpqnOBHKb8XJ+DMt2EXJvlWCjsF3Bpz8TQhfagz4COcqwDqBhpQSIjhxRF4nLFmsE2YIVRAi9cLWrw+sX09qhj3dInwEmS1Ps1oZZyAT6ZNJ69k6g+OzGg0SDB7IaqAgDA9TIGqa/uhZQgBY4llMIahfGcz5ILlBedEygyIzSXYrfW6zpfyMYD7QWGa03Ax2bko8Fxn1vFjkST7F6TFt+MHIiBNS/x08zifhRfVovRjhDMfk2ZMrg7klqDuPDUWpsybBHZjgnBs5LKSA9NWTUYBjjj+J3kSPzg7XoiNpXRGMgjiDoAZ157H5sem8kWUyRoO3UK5BK+C2SSp0JPTVITU6mNfjROsunXBNZKZQZL5rMGnIKE92jUgd4v+mzHmVztvtpxq1JTKrPuqRvi7ZYf7DimN2y2Xn94ejnBtUBXOpUtjqjsRNVOlDGO0S7YJIZO6khoFKcVYyI9ZpSbFbxYzsEu2EqKcmd+9mNQTbaQ3B3CiwKiOu7lBNQZd7nuiarUkKA7tvqbXJS89g5dS5VJxYx6id1ggiEawoHt8ohY1kJ6n0+rAiRwr/b8QMEB6mdQtRP0qip5Ht8pJGYvBEUcDw11IARVnHkL9FinXQ+kiSH1Q6C6oolLSA6Tdt8npJ0iHQ8KJJUp6ZiUug+crBPDMRNjHV7HVRfQ5mmz0YjOmws5O7kKenyc5xsubSUcn7GUTSAckXCCwcixbg2ByOraU6vTS6K1ouuwhKXVhOXQimsLRehI3WZKQ28lR5VUaqGcsqMz6MunWwOiM/ezTYdnfQv4ctdMGqT2OoM1eKhZ+IgvxoqPiTNCbP6pjKYqShmpAB5hw8FAIgdGhrkaxIpATDBuxLI686JVngwepTu6ibMliDijfKzmMxeET/lagbhID5gU3sPTJYxBNMIUAkOHaLPjDxREGoCNZ5TN9aJpGEaVfHZSWxOBh/czwAV7Ka77iDuWnqEDWvaNUNFc0vYv4rXeuMtKR+b35ael5uqTp14arqpGavJS3dnJOldkNawzUtXUmt00qsVzQIT7W244+FRUD2yTjxjOp2ekZVJ/p2ZBUSpHgGscbjQ74d+YHVKfbCAru9K67LPeAVGU12cvUTckVCqWng+Vy9PlfP0THZ+dU/UR42cjauISjX7USwSyWLCAOdcx5fvaPLbi8onCxCYOiqHnCeLR2tjcI2N9dgyNXvGhizTJCMJp1HVpXi2kimcEerwECXSbQqDMdo/r6sEgMto8FNYvlj4ppxcvWi//h/mkUGh4lt+sqPzyUja/K+c8snm8TypZEOLN/Aem4Z02TjPGvW9FEk01kyp+HkKIGB5jzQPXUCGMKzHghLnS3z4RBScKLsh/d2i7asm9qySSTrVGnrnN3ae0EyUj6Mbe4pDj0sn8Doo3YXtXGTSPWcqLDEBuV2CZSHYpp+CkhaYhqAQOONe1kdQkWlT6nCp7y2J9ErtsGY6IuQdmXIYtse23vZM4Joz0pSFLYw2clkJnnmKvgaVqHOS6rWybXbckmh/VpSX4H7Ha+FEnpGJqhLQgndC8TjLUjPO+A09Is6Z2Qdp36ZdqlQKKmu9AzqStXInxribQjXlb6tNkun6jTJk1xWSREqZW038yq4hJ5ViGKJQY/SAAolglF+vISfBJvl+XhEmzwh6o/UtyzXrUicK4XVHDApKkPf6Z83mKSoDn1w9N7I+tCSTiXGJxVVJ0nCoLLyZAdL/AlTpFjeTxg85OIhOTxHUCDc+mPgCfWjUPCGcFXPUmh3JHEooh6mSoSH1Swg5n60WjAKCKeEKVf9CmgV1WAi4VaJcLN8oryY+URyXJ4Ly6FJVKAVmUgUS3+NrJNgDdZJeJtUQ4mokxAj/8gazD+6FydakX9EamL+DR6GfHb3jtlQBHv+5vGwz1WFss95gX2eBvu4n7Ka5Tqpxhc5xvVTjy6N3Nhh50eWqjL05K6O9ILZzD7Rwe3cdVQWczqFB11qA7dHthm/hbuOW0ramKK2WSpvwhO4oJzClRYGmT0qmC9GhVfZJ8INRRTutDDI7VFBGomKT1if47dAEcUrLQyzs/S5NEaXxEcFVsgWY+nOUJW17MW1ixfXwn+q582rfuUVUmMPn8tn9aV1Cp8UK+qZt7j2AvzCRjznnD3b2eeYPdvRR2qYcpeAA65VyGRHYGNv70Zo3NTTs6kHuSR3/Hs+kd7VpBNrnUasy8g7nG4Xq67dprgrJkf2ypHKYObxM6qfKO4NK+Xs4t1hYh7mpLBdID/sd06s7MjuEruUXR/2L/qmZReLXd+7prd3jY7+MuYKXiwGD9GrxB6kr0fofWKXy36Gt6Urxmjd1C7uCVojUKyE+YRv3jwfrQoY+XdSO3CR4u/jZEPtYndnkLp60CXsbIEd0gUawGWhLhqHdJhO549q2WKCCLkNDrUGE74Fw4PkFCVOK/EsZNXrLxnoXqbpnNZYUdOf8lLSCwBPJt2jCdRUNE7r1Czrnr3N6HECwMz6ZRcN9VU4ZnbWTzGkJdW39zkq+oZGR+qT0gxTgjFaqa4pzdcOr2xqjbifIqyqad/Mtn11bW1gzgkEGsOrmX5wGaz3bmi4KCNnoyjTYBmfTe9pEP2EhFvjLOTOMmL34Zv2nX4XdOQ32Rrb2hptfHV5+auvvnr33cIjjwh3MxlejLy5mdZLpFn8hLaqc6uRCexYilg8MdFkorUKVd44T4W9Ll1v96DWENeotqVmZqcKx71Dq9hkCaW0eGaGcXqtqzS1KEHrmi4Vz4Q3pYqUKnKHIP8wvwZ/yiJ1xWgtxZgFHOHcIOZHWV3F2yLLh6abYCAMA52NYtAUZycYMODn6dKyTVLhR7+7dDQjT9gXEx9iLxaP/8Bvp/SdgnZXKTnjS3Dh6YqL17sluPXZoLhiz6CnollJ5MmOXLPNXGvIzDQYMzN9I23m9ApPRbm3Mt0sNAUpPPbbrLLMzDJSXCAtrSjt987S7JIEg6PUZiu1GxNKskt5l0TnOK4c4buTX4n7qR7t/uncLI4rEGEzumV3KEWFThWzwmUk7cvTzAh7bjoFPiuLAl/prZjegMC3Eex+IaybsOpqOcUq6xaKll6XzvAy2mV4OQn6j09QnDWOsyG+P6d3fOiR48s5f3R80V6Igm88RRhtWLrW5Ne3STfL8TYlmkZHawjNVmB47snWup7ZazJX1jfYHY1xjZOyU03Z2WfHz8mvIAgeTX3S3aPxVtq8NZWmTHNqWp44j6tleDl/NF5qlYUcc4f/TIQBL8xCDN5c3bTy0AfnDHC58CEYqsXzS5AIr0MnqzVsNvjgGlIXgBPvI3sM3oGDKD2p14jZDswCQc017PeA3Z23zuyoqXbim9NJf3O53S7yITi8RcWlnpKSo57iklJPcTEbO8CtxP4/Efd4oq4bLPTb4kbE3YHTrXWtC/fUP/9FS13LeVfVw4ya+fNrZtTMm1czg8U/uGFYBmfEeiDsVjUSd2uA4lOnhLegGBxdW1rnDrecTzAiZzqGYZX0vHRzGvHFrRLe+vhjKMYm27u2tAzPbRV+xmjAqqAd52+k9YHzqL89dDDXGv2ijgf84gndi+U3dsiP65rCL+/g6TgP0HHS2CjqWJ23KO4BoUccIbK/anq3VdS7NWZnRtytAdzv0e4vH389Qod9UbLp5ZY7Pv8sPxlt37vpCUdFjgQUB9MfFCkOxF4eXwIl478hutkkpb08JHpM6T0ofKFY+0xJARkVTNJf6G98oT7TjBTxH2c0SSUEOt5db5FfkkJp09rUnUg+8hIiAfccnKL3kqpETxlfb66HU0cmrN18F38QeqiNye7l6SFFNw+O0jayvxGr+Svip6N/Ir4H/hBsoXlaMv8Edf6KpUPpM/vxGR2tC808xW+J4QjqFKb9XMjfApfSGGs0u75PGVANxlGluuKHYQmNY0p1xQ9TO2k3jruaxhE5nSKK+G0wZhgKFVK/x+1QQn3sMg+7OJOZQWe6VKP+CKwRbeCoVft2hdcIfTIijnAHfxX0q5zMDw+RAcF+RdHb95VhP2y/Fedla7AOqujPeFwMteEMjYo2aSW+HsC99yz3JvDZinsTSA3n/8BBtLv/92s48/5zq+FM9PVbUV9/Nlyfv/XGoD4v+3tInxf/TmqG3wrd9O8T1MYnT99IWkQ8H73GePB5cpfWU9DJ3yq/97aR3aCh+Fvwnq1bxXu2fONPcTeI7ei9G42hezfyuG+4a+ECwofaiDrsYBKNMmIT3ok24S+j2YTLmE1I7jpOhDToC951/CUktrM7kJPhYeiW9sci2APJLO+G/k1VKPsbL4T+lj3+BMrHg0SeinckG6RLkmeuWTNz2xF6SbL+wLq1B4J3HpuwjYW1Ee9JdgYvSqaN4FF2UfKBtesO6Nndyj5sk4dtwu8xGxq7t026xwz75b5gz7hld5Wp+NmtY3lt0j1kT0A9PvM/uDPlw+P5bQ22Y/ntBcdsXvmdKQSfBrHPH3kvivW4jd2L4rUdK2jPP2ZraGNrNHf8Gf4Uf8P/v3tF3/mx94oCygd2r3Op3BYujDSFwyzh1EbdRTN8S1K60oed/uSnkh4HeDDpYHKXYzi9K2WJr3+zvqlGtIPnBBaHzODFgTmSFQycffwonOSPkRNc8rvTCye6PP2fnYum9eSsrWkvqVx6zQJ/687crpzljqbpFQuvG/ZLt6fnlU2VXZ9uL5Vfn47jto3/HJ46l7tk2n78XTLkVvT3zukumd8eOGCEImEGuUtmCblLpmvqDFsNvUvGm9XUlO9W3CVD6up8PuFdMo2X3j3rllv677700KFDPTHukgGudDxA4TuHWOstNNZqSf+RsVayDs7AJxPcFb7ixe3bX9z+Eb0rPBBQ3BWO/xlf9uDLX9EWRm3YjlIB7VpSZK7ngV/8rmJ/Ozwz1Ld07M9EBtrxud+yey4jLm1QB28MT4C1HrurMa5v8urZQxdYyvPUkw6jTr3yhfisKamTNerJqtCl4Xmd1fnqSeTG8HhzUuZUU4pei+OUi/dnF8W6F0TSM2U3h79d5mhudtqbEnqmrJkxZ6m71Fa/ev6CDZN7Ezrqqjs6q+nd4eW1obvDA46ekUUDLq/XZq/DMTPFeyOj3B0+FOvu8DJ6F+IIPX8T7e5wsRAWqH3TPTAsnCr3Da67cO7wxim9ib7aGp+PXR9+vOjCOUMXLhpwe6T7w+3Y74eIfwI5neQWvYAT3R5+TfembvwPvYHMwdY5kDLoHlq/cd6O2oLtFxyQ3x2unyTejO1fL90dTurbvqG8O/yNDwMfCPfCnYq7w6sQpncRJuItKac2bNB01YZ+jnV7OMTV9/bW1/X2Ji5qabZVNV84vKXVWeZe3T9jtbvM2brF3eywNzfbHc0wvaZsOrlAXJiruD+8K1l2f7gVYTkp0QdE7W/C28O3MwIJD0UhkOLu8DAK4doY/547xi0je6ZL9Nv25JTlZJenh+53qRn/KT4zEmEz1TToUrPJjeArV6jSDcT5nZM7hPB3kz4nuo+8++z3kdMxJ76PvObs95HHcTqk5b/pfb8aWlO9lMaLxBiRS+Q9kKXYh05sxIEddB0jHfjfWVRbVFQLuzps9s5Ouw1/z8wqLs7KFPZS3zX8297RgR93BMhjxYJL8WspcY8Rn7lp/IwqQfSZm2h9CTc5x0F95hNCAkGIw/5OOaOEwpAZC8RtDAX+S/wLBctBn6Q+O200eOF34q/C/YrPKS94uSXwApym1rbsdqWPvXfd5T16FE7fRX4gz6Ge+ULI3+JFfTJRumvpfO4yOBpZb/5dUm++ZMuWkmj15r3cbOxvLJTjRes+RnAWjnMmC1WkbL0hS3yPVv+Rx/6ex/7C7qDH1sIo7JHfQb+OWw77FPfZrwu7zx64taFnJG/LvvB76pu4IXgu1r1UH3uOHMH/RyLupeKx72HsO9L3szaG70fxvNz3sy+W74fM6UqkRUz/lPd0a33QP3X+1ZH+KS/3GLY/R/+Z1yH3n7kcZ/Of/T/5Z3SfAHjavZTNahNRFMf/kw+TUm1rwU0X5aLgQujNJFhsG10UoaD9oFjpQkSYJDfJkMlMuDNNrM+g76ELH8E3UHChW5/BpbjyPzfHqFWRbswwc3/3fN8zZwJg1YvhYfrTeCLsYRGvhQuo4J1wESvevHAJi96OcBm3vffCF7BYWBOu4GmxJlzF5eJb4TlcKn4VnseV0k3hi+Sx8AKulT4IL6FSrgovY7HssxKvNMfdY1dVzh5W8UK4QO83wkXcxEfhEs97XbiMp96x8AWsFi4JV/C5cEe4iqvFl8JzWCl+Ep7HjVJV+CL5vvACdkrPhZewUPoivIzV8hJeQaEBH3VeCruIEGJIeohTjGBIO0hwghgdWMo0Jdu0irha2vbQR4bU7QxXw3XMZ4eWeKUafr2udqNwqB6ejozaSU7ijj3VajuKlA17/SxV1qTGjk2H9ncRuAJaLpjCAz57TB5RbqkOorBljXpgeidRQMEZ/UxeZ3KfVwNNHmkP97BP+jX62lnvuvb9RnN3795+UxKtzQL+w/U3+2PXh5QeCTunfinoEEeU+K7nWtYmu5iwj21nP555aKzjFrVD5hkwZm7TpXRaS0NsGrTewCZtcWxsGiaxmh7m8Ej5fo71Zj/J2kk8zhV6/VZzGAxMknU1625Q0qhvbK6f/5hn31foBsFwzXigvAWKFtPR6Dlt5qT5eCiypbbD3dDFH1CWzHz+rO2ec1zzmvIXcEDdhOsjroE7T+xqmK41yZv8VHdb4mRuzPPR1j8mMEyVCbO+sSrg/PbCNDPWdFRmg44ZBnagklzz07b7ly9BhbE6MBP1yARREHcU7xp9Exe7TZvMhiZl5n8fFb8Fz72svJQj2k5kKlvO2vIQR8mEA9PiNv+KM8bdYjNqtMwvzaZPs2rXDs1cz2iaZaOtWm0ymegBU+p2ouNn/zdCzcnaPE/svrKY46Xp2ef95+i1KGybOA3jnh71R2dH9/uLPfdf0DehuESNeNptVGd0HNUZvVdlVttk2fTeOwhZcqGDLC2ybCGBCsKmmNndt7tjzc6sp6jRezUllFQIJYEAodcAwfRekpPee3LSe046mXlvtDs+J/Nj7v3e+/r33kMT5PfhZuyO//NxS/hDE5rRglZoSKANSaSQRgZZtGMROrAYS7ANtsV22B47YEfshJ2xC3bFboHPPbAn9sLe2Af7Yj/sjwNwIA7CwTgEh+IwdOJwdGEputGDZViOFViJI3AkjsLROAbH4jgcjxPQi1XoQz9yOBEDWI1BrMFaDOEkDGMEJ+MUjGIM45jAqZjEaViH9TgdZ+BMnIUNOBs6m3A3LsVluBWX4zpcg9twH67Gt3EJbsKf8GdsxpV4Bd/HH3E77sdf8Rf8DXfhQbyFN/AQ8ijgBhTxDgTexNv4AO/iPbyPX6KEr+BL+DIeRhl/wI34Or6Kr6GCX+O3uAobYWAKVZiwcAdsbEINDlz48DCNGfwKs5jHHM7BeTgXz+BOXIDzcSEuwm/wOzzLZrawlRoTbMN/8F8mmWKaGXxIMMt2LiLZwcVcwm24Lbfj9tyBO3In7sxd8Hf8g7tyN+7OPbgn9+Le3If7cj/uzwN4IA/iwTwE/8Q3eCgPYycPZxeXsps9XMblXMGVPIJH8ij8GD/h0TyGx/I4Hs8T2MtV7GM/czyRA1yNR/AoB7mGaznEkzjMEZ7MUziKf+Hf+Cl+xjGOc4KncpKncR3X83SewTN5FjfwbOrMs8AiBUsss4LnaHAjp2ji5/gF7mGVFm3WuIkOXXr08U38CN/Bd/E9/BDfwg84zRnOco7zPIfn8jw8hsfxFJ7Gq3gCT+I1XIyXcQUewOt4AVvwPM/nBbiWF/IiXsxLeCkvw+9xL67HzbgFL+IlXs4reCWv4tW8htdyM6/j9byBN/IjvIk38xbeyo/yY/w4P8FP8lO8jbfz07yDd/Iu3s3P8LO8h/fyc7yP9/MBfp4P8iE+zEf4KB/j43yCT/IpPs1n+AU+y+f4PL/IF7iFL/IlvsxX+Cpf4+t8g2/yLb7Nd/gu3+P7/CDhW0ZXV29XoreqFxzbSugKtd68I6aFpktI9Npl2xJTCV1huq9gOAW/WjLFbLrQ4Km+ou3phYKwvFShTrX+gh66LCroD/zrXiIXBRRRwJwKKCSkcg1Hok4TuSgNoVDLKY9CQnogllQ5ltRAw1e5TjMDBbta1SOhHBPSq2N+Kg3esjqvOy2V4KcNeoZZFJohITEYVWJElQyqSgzVusEoZ0Nh0+CaJmNjek0sxsYGz6yNZzW1lVB2hLBM3SoaBW1IL/ie0EwJmaG4nhkTtCHVIFNCy1BQfYsZ/LRhZW8p++G4vRW3H1b2loTmnFVuFlY5MRIVbEcFj6iCbQnZkYpvlXXHr5q672XtuKSNqriOijsaj+vE446quI6CMWXlSkiPxVrnNnjbeEEUDdPU27yIaOPK3FPVj4fj88LxTajx+Wp8E1E1flTNhKrGl9A64RhWudUP/9mJrSrz41JiIhqzH92QyViWMzG+LsbnGlxbr2qcl5Ba3ziy8w3aG2ahFPQ6TfTmFOpC9WfENXW3orjd4JmxeLfdmCDfgO6eldpk2dGDymcUTKqMZiQkJ4uGcIRruMmZBaatU4pzElpyvmOHrrqXLl2pcHlPhMsiXBVhX4T9EeZajc6gzKxb0wtiQ5hOT/eKxVtJnbrpLVErgWZemPZMUEK+ubShlJHz7Rwz7Wl9Kh0NP9RPysQ6C3otKYsIWXuj53JD2YZMnoaQpdRBkIvyEIQsWx9DKGUWehAKbeEsQtIRPxEymJgtmHq1aM9Ibx2bfOF6hm0tLCwu+4bpBtamKUrSYkl9xTHKFa+uZIqq7W2lJFfqSkk5aJloXi9M1aVEcN6lSU04hl0M8w8SL8oy837gRFqnKnO1ipAppYRVjGxTorpAszXdCR6fKH67lOqxF+WD+zwl6ul1RHJdIRsuiLq1lOqbmi4hER6fzmBmRTuYnhOwhGy26aXdIGUzbLHpaXNBloFSybSDpodK80KaacGlC8GbCaU2rxI8luF2yfalr5IxLfddYzbcd4OphuZtQqYRKFiGdJBSfer09HxSXpGImcF5CFjWFVWjLiXleQxZaBal2x5Qr2L7bvBSh45rpu+GkaqGJUm66pueUTPnZLHGtFEUMpFNvm6G+qZwQ7VU8NzrQeEBzYQuFswz4f6C8qJIaUFOW7a3wNv1Ws2xZxfE/wE7dqdjAAAAAAAB//8AAnjaHYsxDoAwEMPsComFF/GhsrQzB7yNtxExWEqsBIEt7KGxImco7rTHjh4OmtN4y0q+fLNZ/gcfwDMGn3jaXZLZT5NREMXPrxsEDWK1oK1i1cQo4cHwZDBBxUqCYkya6gMxYq1FkNIq1kTUd/cd9x1xxV3cl/jgX+A/hPPdfm48fHNm7jdzzszcKyTVqKzvCqQ6ujKqLWTLRSUVsnNNTjpEAYU1T6E13euSalqbzphNb9qYVGsmvcH8KZleFPaj4JQ4ZF4kl92X15LeoWxOzYX+XVm1FEq5glY421Yu7h9UyuUH/SrPVvjlrIeeUkTViiquRdZDi1rVrvXuH1rtY8qv+33+oxITr8Q0GYeHY3780zDCMqfR5fla6nVAnIRh2TTrTKdDW9VnTDUVdXZbp1El6HNYr4MOYxp22OB1T7//L2CctQxUKnTon4yCf+b5g3/8sGYbU73mmFJAyxXjIpc4zymuc5nTXOEqZ7jGEU5wlpMc5QIjnOMYx606pmmabj1HtVhtWmV72aYebVdOAzbNAR1mM1voYQc5y47aV+30h02r022h07x2NXKTV7xhlHuMcZ8HPOQRj3nCOB94z0ducZs7fOIt77jLa24wwTe+8pkvxtKoKmOu1Sx/mgabZ65NlLB3tcDe20LtVF69KmlEE6wkS54iJfawlyHbBXbHWC1qdjdV5TYT1AzN1HxjD9jdjTLu3sVfr05hXvKMpzznxf8VvwBVS2J0AAB42t2cC3Bc1XmA/7Or1ZXWWssSa9mWhPELA+H9CjHijQ0k+BEek8Q4LbS8WuIqQ8sMMJMHSTskpXFapkB4ZFqmoS3mVQZKQxlcMOPhUYMb48AYG8dCWBJWhSVbykYbZXX6nf+evbsrr2xJtcy098y/e/fec/7zn//9n3slMSKSlMvkKxJbfMnSq2Xq6j+4rVUapYLrYq24+81SceE1S+ZI88VXXs3nlSuW8Xn1lZfzGfUx37jxT1ulyp0pVEiM75gkax4VM+VZxXer9EjGiPm8WWruMQ+aTbF07LzYj2Lb4kvjd8c/rLim4rGKzorBRGViZmJ54urE3Yk2WsZ9VjZXtlbuCmYHdwX/EPRVTa2aCZxdtbjqpqq7qp6perXqV1WfMKbQ2vKtujHoqz6hurX6L6qfq24L75p7qjOFHuYeNwv4plbzGV6r3FW5q/p3lbvMPczYF/Qlv59YzplrfckHk3+n8Fhyk6MkuSuZmTJnyvIpd0y5mxXPsP3wJeCsQVIyk++UHGF7JG0/5oq73ykz7a9llu2TRvu+NNlBabZdssi+LS12SFbarbIKHAl6bqVXBmnUSQsYV4KlFlxZSYNzOj0auDrDvswscXr20zMNvl7mj8ki7rVwfpUdlpVcX8W4uCxD2vskaRbznZJ6+2Pw7ZXp3JthN4GjGxwzwJGBpiw44ozfycz9jN8pT9st0JLiTr2u6Dc6soFeM5ixkdnm2ZzMZ+ZWRtwugblWUuZm22dW26xZY3vMvcz9CHrC7PSYzkg3+ijWPQdMrXYgHGWHzZ/YnLmXGY6QanrWgDPFHOGqq5TLMzl3Kz0KWubovHG5ge9b6L2a81bOb5c02HrMGqkB2xDYUlyth+dp+KKY6On418jdJuhq5r6jxa3iBq7foqvJginFauKsJsdqcqwizuyVjKimR43dB+ZXwB8Hs+Oow54EcwDmPWCGVq7NAebZ9wrY6bvatjHDK3K77fAzbGKGHjjgeOa4MGQesBlmDGQqs6FRyKeBVYa0xxT7PGaZz4wO62rut6JftzP6WvjpaJ3OyLiOrGeFbvXTVUerIiyNXG/ie46X4Q2c3wLGVsaEq09CW0ZXvwaaHNajsOykVKIb1fZDKHKamWaGl1VPVTOQzizk2sidJq41q7zfZ5atMpd789GpGxh/i8xGailpZS3ftNuZcbbcZ3cjvTZzs8w3q5l9jX0DbnSYB6TOPMLYes+NXr+mnF9PzEt0UNfjJDoPCkK9dGtJgnnYrwUe02ca9A94zW4D0xASBBtcCjV7Dxj2QmsWWrNeHxw3epHSEHR1wYdQm6f5uftUEwbAgwXbD7iftp/yaxdYsVS7zvkFKAqtKKfaMoPfs1Rj3vYak8MvbMWOO7DBDDbYhW+9X+2hmvvOIuq5Pp9VL4KmldC7WmIqc7c61R40yllcg/rkalZRwxwpRtfbzTKPX25VV0HpSr5XwVUnhbX0eZIxTyGvTuATPE83/N4nDUijHswfgDmFJGrBtJa1PgndTwGdnHe7maCzhztp7sS5k5IXmKMTHJ/Qq5t59zkOqXWnwFJv10NNLdR0s5Ycax6Eqhy+Kw5VOahyFNWBqQYsKY8lDpY6dGQIquJQ9aYcKbVIrw6oZ60LmPNEoAU4F4x3gOHbnH8H+C5wF/A94PvAn9ttso7vV4D1wF47YM60g+YsYBFwDr/Ps9vMdcx2PbM+gO48CDwM36bKo3YDq22CxmnQOBdf+Z/yqn0RWmdDawpaG6B1mplud5pZ6PGRdoM5276FtlSjEylWU48HnseK5kPHVWjhSrublbdhzTn5KVxai348CcecTJ6mTyezfQI/u+HMPvzcdNsJJzbBiTSc2IClbMdKtiP7tdATSnMBI/cwci4j04xschJVH5sJfaz6cDTKRQ3mXw2sZQVPQuFTjOgEPkFTu/ne53yC3cp8ATYUZ77NapUBIxq8rGZ7Kt36a52s0Iy1qg+B0nUi/Wbz61j6nUC/JvrNp99s4zy9s21np530Vc0Fe+hf2uFUAJX96MUMqMjhiauRg1qw8jDD1V7G9sgUfNGg2lkD/WbQYya/NbKCswlN0ViHjbWAz9lxKrRGejSBKwi9pcbIrI/ISR8jM9CYhkeNeLEa5tnKrzfAUKt+byb3ZyHdRjx+Mx5hkX3SR/L3ZRXrqPDW368eoolZprHGDKtw2rvTR9M443qVtoItJLHxGlbXjaS7scQGtLEHO69xXgE89So/Z885F3/hwRLGXg4sB1YA7cAA8BvAZQZDQA6wgOsd0Dugd0DvgN4BvQN6B/QO6B3QO6B3oDM6rdlhvsps1+iMGfzU02jZXCg6H34ukAvkNLCmwZqWpVxZBiznfAVwHffW8vsJINS0FDOmvZ073UmJk3wfgNZBSRpK0uIyoSEA3w8labKalPmqLDRfk2PNNXyv4vtmcCe4n/TRqB2JZJHgXEeh3cHnMuwq6TIDpPErpLGb3wlsKolUXoP3m+D9VriZg5u9iivwvr4myh6c1gT6axFrb4H7YNSY9Av61XGnVnOBWRobOtCrlNe69aqfu5l3bxhv7OtQuNvnYXvpNaB5WIv6tweU0jofSz5lhNPmYfBWeWq3M/tmWcNccY2IbsWNuv4w2uTCnA0NcznULH43wgVnBYvwvC0aYW7FmgI8+JTQMzMyzfoaoGgmMzVCfTORfw48nI9kj5bj5His9yQ5RU6V0+UMOQuKz4bic+RS+SISvhrNXSXXy41yk3xTviXflu/Id+Uu+Z58X/5S7pG/kh/Jj+U+eVgekZ+iBU+hO+vkFVkvr8nb8pF0SJfslv9GBz6VfiSfReqWSiJmKsxsM8fMNfPMyeYUc5o5w7SYc8wys8JcYa4yXzMrzSrzdXOtudHcZu40PzA/NGvMveZ+LCX2hT9yVcmpw2eeJlehA2IzrD2OPVfZXnxkDEk724+rjZM5weFaIA738Ezw/LAdtt0+R0ZQ+D3ARzwEPXd1V40dsFtZQxb6XI4+gMRrbT+/JpOy9+3PyFyp9Ny8zN6vV7vhWRwudkFBDn522/XciSvNwhWnv4OcBpNI2W7m7HIz2F20XuVWHRJMc+Zs2Nl8UhJ46YSTNLTvKRmfmzTKfmH/0b5ue+BR+Huz3YmE38XHiN1iN9jtdiO/t0D/Nni4W/u0OV20bawkM+naBh9CreEzgJrN0JOhtds3bI7fGa5m8pTRq89J3n1PMmFxu9cO2Z/jMSXUMz97X+FcP7uItoXV9ENzF5zcO0ncWmfvtA8pv1KRbYZHgJ/P9+IMTasL+/hrw1ohpSbRa2zTOCT2BfvaiPUXLK8qoqV4bCbUg0mibAdca2Plcc7axj/P5Pk0rHIzX/WcvYQldpXqX3SWLEeH8zEFvTzklHVA0R40yGncRvLH8Y7vn2SvsVv+zx3q44MD6xPeIzMZ+oY3EDsI9g48/UB5r+5iZCEOhWf+s5d8LX81PUncGZpIrDmceVGJVSbVp1WFXBvNV4RZip7WTLJuDRfFgZxmksW5ifOvWzUrKfjEfVQa4XnJnUnSveEi3YpH+hZ8hpIUn5kVIpST5o4R0o4Xa2hEZQ05enB4JDo2bzCJ+WM2H79LfEOyJHb3u4ytdIzL24rQLDjkhAUaYwL5/3vED7Gui9RRr8ftY/YxrTzL+CyVYoIKaleJ3qe4ssFVDP6Yf8jX2azUPUm+PW5Npp7JHi6RkLHtse/Zdj3/JdG0XfX/TX+7zmVM/jPiOzwPvUya/Ds9qeQFkc7k6/XBEZxOlM1tU4dO16gsn6EC6FY54j+1Xs/XRq9H55zZt7nSG9aovrrfqnX7ZMluo33UvojMBkv9+mdkj+OZN/DSzO4n75Iqyt+PT3B9YzvShVqNnC3rda4+oiiMpLUllfQOT8/kUjbx4/xJ9RkDRZ+DLmqpzxjEUrL5Sk5tMHW4l+1sFK3p8Llqj6csozlkcaTNTl5+cUBvlor8ZcrXTu0j+lSVHZk61JkBfj9n37Ibxb1lUofX36W7nzk82E7d+8i6vW6u9Pj+64kSWTR/D9l3b5k9uSx19SBYO+xr9gn6PZEfOQ6aMp4bAfVZX0nmGPc+o0Z3PTI+1oc1S0oppUYol3HbXxf5uSodG6hGpKR24nuBZBAutx5weuQrycDv90GJ1gHJvKaNKwMc1PUkx7MvYbeoDKvgfKd6L5FqcNQoTbXuLRU+k3g4FyljXu9jjoNqLWXswO5VPiVD/qpODOjIuO6DBGOzHbsXjRk81DsrpXMX78qNbx/M9jkd191+pYBY/RI6niXO95EZZsjBuqQajW632yI6Y7q321OyS1mojHdLBb03gqePc7cnvi262zUu2trsMDnts6Hl283kFW9A1xB4f8ndT93TV61y32cWJ6G19k3HCWbfXNgzjbC9gFU+jNVusq/QfgZdD2neEkS+JhiTv9jCvAml7iNkO6wxMqVx0j3dqXPPS8gN2/1Tn6xydUh1JldeZ+BkTJ8312t+mQRrj3oYxsKx5Lg8Bz5C9TSMzzno7dV4rk9w1EpLM8WkpylWrlLPxwfw7vPedwI5E1i6lMcxPEUPdMQ8dRm1vyrFFoNnw3lrVEpz4a9SqvL8UznnIv/idp4zOkb89YPUzr7nW3YNWW1b3juhI5uw1uexgG78+LNULc+jyev4dN/rXRaEVeTQxg321dH2KqkLUkSCl+w6eg/Zl/DL69UjBVx70b5Bjw37W84IHL0aZw66C1Auuow1pk/Ma2BB/46PLewZtOtTnV7NMLpdVHTPpGwX1/e46z4T0ndCaNnRNNe9U4aWap1gO/WtiTCa9IJ1b5RNHbgO+Hsk+FGUxa4nE0NqeI0e4FnO1uEZ1tP+w+4IvZLdZn+LXLbB7VH8rz5P24TENqo9voE0857wTfuye0Y0Ym9pdPr2RFFHNNfYzqw5jSvbwidM7r2//NNP9c0aVUv3b4v3dfVZ6Q58dkbf6YxH2pCYpLxyMPIzAwfRy/waOnwlPzih+brUAwWluxkak4vm0fjVW57Sg+9SldMrJxd9CyMYPff/bHap8C2iMcZlWGPLqWLRp9OKWvXzCX0XIf8EqjrvkctUoYkSabo3BsXni9N1RHKMXKjL15LY0rvj51u5HNVl6CVHTVEUD0p3e22bezOuLOZ2vMIe9+YnUt9oPxyFgGQ5bQ/rrHI4R5Xdfqshl8lnxyO4Qi2yMXybVCNS+378LJwFI3Mx9cblNPvdsrq8OTrvKMR3jVSdOkNK34Yr8okum3LvjKp3bT8k0txa3qePxknVyTSt+aDalIy4Vee1JOYznsH8GwrqZ4fKVKp5C+jwOtDmY+BQVDekJlY/6ajqKEPKRmftPvs5Ri+cTBN95770mM/1YxXLsd43Hi0L+TxLtfQMjR4ukjR8dpsvUa6m8Vg1aSI4nI+JYwHrRt0jUymNfM6o0ukZm0a53HE/3XQW8J6r/vQd7P29xutaV8ax0c3jf2o9Ea9RUiH3YpEuYw68jgZFlfBHWi8NkfE8W0yZe6+11H+43KNkLvK6cmuxG8pW3O37ZaF1+JINUkkF87q3vHjJfv7rWHkdc/wcv7F93DzrHSN31HPtry3Uj1Qi9lPdf3I6NXr2ki3ZP8tE0a9Wdzp8RuL2F8r4jGIZxyOP6ubv1BlTUTbzv8seyuc0t+rn78kt+T3doqOl6Pwr0dlSoLVo7MGPFlk8gZ2ivH8bHFtV4p/F9ByIw+M48jEglo+XVKP9hZ1blXd/2RiQ8BCLYsB7KtcPNC/XHd8xx4A0OuMy/2EX0Ysr+/BZflHuHHPv8kVPXt4luifQn/b9PZp7j61MlA9G+kndlXR/D5bEDnZqlMkevudrB94f0Ep8AB58nPfdk/9+4pgo26CeMqZ/Z5bzuxYFns2UqVzfIlX2Uftosa9TPhcfU6nS3ivk2OBIIs13okoyF0np8TJUbCrSlGSEo1//RuJIuwW57vZXE+FzGLzr/fYJzQhrtFLYWxQ5dhbFsHeL3qfNRvsutWWfWJTzVvFSKXqPnNC/dgrQ9MxIH2ufs3fbx8lss2FGXZTDx/Pvrej7q+9Sk/sKJ6Teduvb1MnIGw8daC+q+I1l3al0OwivubfVw5wCnnWXVpVlnu4E+Vny9a7i3er3jkKezpY5Zd9xiXuf34OWhPcD+vq4r57mHd0Lm8gRG1U27v3pwfye3Qgujbp3FL4TYD9Wf5ZV/PGJPRcK89Rwb66Qj0FDjZNltFqylXCvb1QsdZ5nCV8zZj1HKw5Xzjrq/ZK3d8b/bOegO/m5SOfavRzzT/JTB8FSF+nCjJIqMDOxvZfI7g7+fLPiIFlbKsp3Silrn+j7aWH1FXIfPeuI+FZT/CxH99aGDvjMqN97h1Bv+yJZJMYYf4wkzE/kMv+rkrPpus5L5RJZBDRTp6XlKCy/TqZJk/716hFyFi1/VGked7QcT/VmfM13rBwnn9Oz47ES9zcxJ8pJ1HsVcgoWcaqc5uo7PfA9croskc9rVnaOnOszs4uAxbQltBlkeMtkuayQufJlmSdXyJXReCJT0Wq+AJxXtJMSHov89wVR1FtQ1BZq3Rm2/HG8Qr6585N9OxU+10NxobVAe4tv+WOJpzxslwIrfLuC8yuY9fQIjmZ8MRwvF+ucC8E3Eo6BP8Ugyq3yueyxHo6DlxepNEK4ODovjF7sV70kAjfbCfA9DycigWI4CXmE4Cr8FWXhFKR1Kqt18r4yAtFVO/xuHodr/8ONzIPDsIj2Jblcvug/wzziEpX2BZHki49Ly/LknANYQq3MkvPlQoUj9crZMgVwze1BnOmh2v1XB/MguI72+xgn6NlZrGUB1lMDOMtZDKcvAttlrPJCaL5An8OGx6ngNPCgwutd+B2P9LDCQwKLnAef5qIX+ad8szyOaqSS1jYV2pfCl2P4XIqNNnHtXPcfEKB7DpZ7JhbUgtYfVTK+cEwBpiGbvN58LrKg43TP8zhvzaaoxSLaC+1SpTrfXKyb51vAnfOguLilo3a5b2mlPN8WALN9m4ncZzJrdQQV4V+NRrBQK8XweyRUwJ9iWKgVo7Owy0dAeC0OJxcqJ91nMYh+N5XA/pQU7rn/0VAMlcgjBIErs8vCXP3r95kq76MiEF11zK/c4TpmPzm6kXlwGGpozarLzV6jna1OR2On+Z3kKfjR44q89YIirzp1zMGsTv8S8wisOoymp2isT3mrbFQ4CdpP0b8wE/17SsP92axlPjM3YDkn8+s0dGSuequTsJ5LuHYZ0jgNL7Mc/f+y/D42dj3tEvlj2qXyDdplVP6tWNdttC/JHbTL5VvyQ+S0hrZS/lr+Vq6R++VxuVaelnfkz+S/pE3uk3baP8ku2j9LL+1x2UtbK/2SkSdkkPaM/FZ+J/8iw7TnDIc8b+ImLv9qEiYhL5gqM0/+zSwwZ8tmc465WD4xy8zXpc9ca67DQP7QXG9i5iZahWmlJcydtErzA7PGBOZvzP1mqvkJLW0eok03j9Aa/ge4EUgQAAAAeNpjYGRgYOAAYhYGPgamzJTU/KL83DwGJhc3nxAGvpzEkjwGFQY2BhBgZGACquRhYPxvzwDShVUUAKQ9CUIAAHjaY2BgYGQAgqtL1DlA9MkPWqdgNABD1wcEAAA=) format('woff'), /*savepage-url=Calibre-Regular.ttf*/ url() format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Calibre';
            src: /*savepage-url=Calibre-SemiboldItalic.eot*/ url();
            src: local('Calibre Semibold Italic'), local('Calibre-SemiboldItalic'), /*savepage-url=Calibre-SemiboldItalic.eot?#iefix*/ url() format('embedded-opentype'), /*savepage-url=Calibre-SemiboldItalic.woff2*/ url() format('woff2'), /*savepage-url=Calibre-SemiboldItalic.woff*/ url() format('woff'), /*savepage-url=Calibre-SemiboldItalic.ttf*/ url() format('truetype');
            font-weight: 600;
            font-style: italic;
        }

        @font-face {
            font-family: 'Calibre';
            src: /*savepage-url=Calibre-ThinItalic.eot*/ url();
            src: local('Calibre Thin Italic'), local('Calibre-ThinItalic'), /*savepage-url=Calibre-ThinItalic.eot?#iefix*/ url() format('embedded-opentype'), /*savepage-url=Calibre-ThinItalic.woff2*/ url() format('woff2'), /*savepage-url=Calibre-ThinItalic.woff*/ url() format('woff'), /*savepage-url=Calibre-ThinItalic.ttf*/ url() format('truetype');
            font-weight: 100;
            font-style: italic;
        }

        :root {
            --blue: #2c7be5;
            --indigo: #727cf5;
            --purple: #6b5eae;
            --pink: #ff679b;
            --red: #e63757;
            --orange: #fd7e14;
            --yellow: #f6c343;
            --green: #00d97e;
            --teal: #02a8b5;
            --cyan: #39afd1;
            --white: #ffffff;
            --gray: #95aac9;
            --gray-dark: #3b506c;
            --primary: #2c7be5;
            --secondary: #6e84a3;
            --success: #00d97e;
            --info: #39afd1;
            --warning: #f6c343;
            --danger: #e63757;
            --light: #edf2f9;
            --dark: #12263f;
            --white: #ffffff;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: "Calibre", sans-serif;
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(18, 38, 63, 0);
        }

        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block;
        }

        body {
            margin: 0;
            font-family: "Calibre", sans-serif;
            font-size: 1.1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #12263f;
            text-align: left;
            background-color: #fff;
        }

        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0 !important;
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 1.125rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        abbr[data-original-title],
        abbr[title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-bottom: 0;
        }

        dt {
            font-weight: 600;
        }

        dd {
            margin-bottom: 0.5rem;
            margin-left: 0;
        }

        blockquote {
            margin: 0 0 1rem;
        }

        b,
        strong {
            font-weight: bolder;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        a {
            color: inherit;
            text-decoration: none;
            background-color: transparent;
        }

        a:hover {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([class]) {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none;
        }

        code,
        kbd,
        pre,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em;
        }

        pre {
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            -ms-overflow-style: scrollbar;
        }

        figure {
            margin: 0 0 1rem;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        svg {
            overflow: hidden;
            vertical-align: middle;
        }

        table {
            border-collapse: collapse;
        }

        caption {
            padding-top: 1rem;
            padding-bottom: 1rem;
            color: #95aac9;
            text-align: left;
            caption-side: bottom;
        }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent;
        }

        label {
            display: inline-block;
            margin-bottom: 0.5rem;
        }

        button {
            border-radius: 0;
        }

        button:focus:not(:focus-visible) {
            outline: 0;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        [role="button"] {
            cursor: pointer;
        }

        select {
            word-wrap: normal;
        }

        [type="button"],
        [type="reset"],
        [type="submit"],
        button {
            -webkit-appearance: button;
        }

        [type="button"]:not(:disabled),
        [type="reset"]:not(:disabled),
        [type="submit"]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer;
        }

        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner,
        button::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        input[type="checkbox"],
        input[type="radio"] {
            box-sizing: border-box;
            padding: 0;
        }

        textarea {
            overflow: auto;
            resize: vertical;
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
        }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
            line-height: inherit;
            color: inherit;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            outline-offset: -2px;
            -webkit-appearance: none;
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button;
        }

        output {
            display: inline-block;
        }

        summary {
            display: list-item;
            cursor: pointer;
        }

        template {
            display: none;
        }

        [hidden] {
            display: none !important;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: 1.125rem;
            font-weight: 500;
            line-height: 1.1;
        }

        .h1,
        h1 {
            font-size: 1.625rem;
        }

        .h2,
        h2 {
            font-size: 1.25rem;
        }

        .h3,
        h3 {
            font-size: 24px;
        }

        .h4,
        h4 {
            font-size: 1.2rem;
        }

        .h5,
        h5 {
            font-size: 16px;
        }

        .h6,
        h6 {
            font-size: 0.625rem;
        }

        .lead {
            font-size: 1.17188rem;
            font-weight: 300;
        }

        .display-1 {
            font-size: 4rem;
            font-weight: 600;
            line-height: 1.1;
        }

        .display-2 {
            font-size: 3.25rem;
            font-weight: 600;
            line-height: 1.1;
        }

        .display-3 {
            font-size: 2.625rem;
            font-weight: 600;
            line-height: 1.1;
        }

        .display-4 {
            font-size: 2rem;
            font-weight: 600;
            line-height: 1.1;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid #e3ebf6;
        }

        .small,
        small {
            font-size: 0.8125rem;
            font-weight: 400;
        }

        .mark,
        mark {
            padding: 0.2em;
            background-color: #fcf8e3;
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
        }

        .list-inline-item {
            display: inline-block;
        }

        .list-inline-item:not(:last-child) {
            margin-right: 6px;
        }

        .initialism {
            font-size: 90%;
            text-transform: uppercase;
        }

        .blockquote {
            margin-bottom: 1.5rem;
            font-size: 1.17188rem;
        }

        .blockquote-footer {
            display: block;
            font-size: 0.8125rem;
            color: #95aac9;
        }

        .blockquote-footer::before {
            content: "\2014\00A0";
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #f9fbfd;
            border: 1px solid #e3ebf6;
            border-radius: 0.375rem;
            max-width: 100%;
            height: auto;
        }

        .figure {
            display: inline-block;
        }

        .figure-img {
            margin-bottom: 0.75rem;
            line-height: 1;
        }

        .figure-caption {
            font-size: 0.8125rem;
            color: #95aac9;
        }

        code {
            font-size: 87.5%;
            color: #3c4257;
            word-wrap: break-word;
            background: #f3f4f4;
            padding: 0.3rem;
            border-radius: 3px;
        }

        a > code {
            color: inherit;
        }

        kbd {
            padding: 0.2rem 0.4rem;
            font-size: 87.5%;
            color: #fff;
            background-color: #283e59;
            border-radius: 0.25rem;
        }

        kbd kbd {
            padding: 0;
            font-size: 100%;
            font-weight: 600;
        }

        pre {
            display: block;
            font-size: 87.5%;
            color: #283e59;
        }

        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal;
        }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll;
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            width: 100%;
            padding-right: 12px;
            padding-left: 12px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {
            .container,
            .container-sm {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container,
            .container-md,
            .container-sm {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container,
            .container-lg,
            .container-md,
            .container-sm {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1140px;
            }
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -12px;
            margin-left: -12px;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters > .col,
        .no-gutters > [class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 12px;
            padding-left: 12px;
        }

        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        .row-cols-1 > * {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .row-cols-2 > * {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .row-cols-3 > * {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .row-cols-4 > * {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .row-cols-5 > * {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .row-cols-6 > * {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .col-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .col-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .col-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .col-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .col-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .col-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .col-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-first {
            order: -1;
        }

        .order-last {
            order: 13;
        }

        .order-0 {
            order: 0;
        }

        .order-1 {
            order: 1;
        }

        .order-2 {
            order: 2;
        }

        .order-3 {
            order: 3;
        }

        .order-4 {
            order: 4;
        }

        .order-5 {
            order: 5;
        }

        .order-6 {
            order: 6;
        }

        .order-7 {
            order: 7;
        }

        .order-8 {
            order: 8;
        }

        .order-9 {
            order: 9;
        }

        .order-10 {
            order: 10;
        }

        .order-11 {
            order: 11;
        }

        .order-12 {
            order: 12;
        }

        .offset-1 {
            margin-left: 8.33333%;
        }

        .offset-2 {
            margin-left: 16.66667%;
        }

        .offset-3 {
            margin-left: 25%;
        }

        .offset-4 {
            margin-left: 33.33333%;
        }

        .offset-5 {
            margin-left: 41.66667%;
        }

        .offset-6 {
            margin-left: 50%;
        }

        .offset-7 {
            margin-left: 58.33333%;
        }

        .offset-8 {
            margin-left: 66.66667%;
        }

        .offset-9 {
            margin-left: 75%;
        }

        .offset-10 {
            margin-left: 83.33333%;
        }

        .offset-11 {
            margin-left: 91.66667%;
        }

        @media (min-width: 576px) {
            .col-sm {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-sm-1 > * {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-sm-2 > * {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-sm-3 > * {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .row-cols-sm-4 > * {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-sm-5 > * {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-sm-6 > * {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-sm-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-sm-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-sm-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-sm-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-sm-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-sm-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-sm-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-sm-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-sm-9 {
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-sm-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-sm-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-sm-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-sm-first {
                order: -1;
            }

            .order-sm-last {
                order: 13;
            }

            .order-sm-0 {
                order: 0;
            }

            .order-sm-1 {
                order: 1;
            }

            .order-sm-2 {
                order: 2;
            }

            .order-sm-3 {
                order: 3;
            }

            .order-sm-4 {
                order: 4;
            }

            .order-sm-5 {
                order: 5;
            }

            .order-sm-6 {
                order: 6;
            }

            .order-sm-7 {
                order: 7;
            }

            .order-sm-8 {
                order: 8;
            }

            .order-sm-9 {
                order: 9;
            }

            .order-sm-10 {
                order: 10;
            }

            .order-sm-11 {
                order: 11;
            }

            .order-sm-12 {
                order: 12;
            }

            .offset-sm-0 {
                margin-left: 0;
            }

            .offset-sm-1 {
                margin-left: 8.33333%;
            }

            .offset-sm-2 {
                margin-left: 16.66667%;
            }

            .offset-sm-3 {
                margin-left: 25%;
            }

            .offset-sm-4 {
                margin-left: 33.33333%;
            }

            .offset-sm-5 {
                margin-left: 41.66667%;
            }

            .offset-sm-6 {
                margin-left: 50%;
            }

            .offset-sm-7 {
                margin-left: 58.33333%;
            }

            .offset-sm-8 {
                margin-left: 66.66667%;
            }

            .offset-sm-9 {
                margin-left: 75%;
            }

            .offset-sm-10 {
                margin-left: 83.33333%;
            }

            .offset-sm-11 {
                margin-left: 91.66667%;
            }
        }

        @media (min-width: 768px) {
            .col-md {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-md-1 > * {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-md-2 > * {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-md-3 > * {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .row-cols-md-4 > * {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-md-5 > * {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-md-6 > * {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-md-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-md-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-md-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-md-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-md-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-md-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-md-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-md-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-md-9 {
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-md-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-md-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-md-first {
                order: -1;
            }

            .order-md-last {
                order: 13;
            }

            .order-md-0 {
                order: 0;
            }

            .order-md-1 {
                order: 1;
            }

            .order-md-2 {
                order: 2;
            }

            .order-md-3 {
                order: 3;
            }

            .order-md-4 {
                order: 4;
            }

            .order-md-5 {
                order: 5;
            }

            .order-md-6 {
                order: 6;
            }

            .order-md-7 {
                order: 7;
            }

            .order-md-8 {
                order: 8;
            }

            .order-md-9 {
                order: 9;
            }

            .order-md-10 {
                order: 10;
            }

            .order-md-11 {
                order: 11;
            }

            .order-md-12 {
                order: 12;
            }

            .offset-md-0 {
                margin-left: 0;
            }

            .offset-md-1 {
                margin-left: 8.33333%;
            }

            .offset-md-2 {
                margin-left: 16.66667%;
            }

            .offset-md-3 {
                margin-left: 25%;
            }

            .offset-md-4 {
                margin-left: 33.33333%;
            }

            .offset-md-5 {
                margin-left: 41.66667%;
            }

            .offset-md-6 {
                margin-left: 50%;
            }

            .offset-md-7 {
                margin-left: 58.33333%;
            }

            .offset-md-8 {
                margin-left: 66.66667%;
            }

            .offset-md-9 {
                margin-left: 75%;
            }

            .offset-md-10 {
                margin-left: 83.33333%;
            }

            .offset-md-11 {
                margin-left: 91.66667%;
            }
        }

        @media (min-width: 992px) {
            .col-lg {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-lg-1 > * {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-lg-2 > * {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-lg-3 > * {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .row-cols-lg-4 > * {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-lg-5 > * {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-lg-6 > * {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-lg-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-lg-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-lg-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-lg-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-lg-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-lg-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-lg-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-lg-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-lg-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-lg-9 {
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-lg-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-lg-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-lg-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-lg-first {
                order: -1;
            }

            .order-lg-last {
                order: 13;
            }

            .order-lg-0 {
                order: 0;
            }

            .order-lg-1 {
                order: 1;
            }

            .order-lg-2 {
                order: 2;
            }

            .order-lg-3 {
                order: 3;
            }

            .order-lg-4 {
                order: 4;
            }

            .order-lg-5 {
                order: 5;
            }

            .order-lg-6 {
                order: 6;
            }

            .order-lg-7 {
                order: 7;
            }

            .order-lg-8 {
                order: 8;
            }

            .order-lg-9 {
                order: 9;
            }

            .order-lg-10 {
                order: 10;
            }

            .order-lg-11 {
                order: 11;
            }

            .order-lg-12 {
                order: 12;
            }

            .offset-lg-0 {
                margin-left: 0;
            }

            .offset-lg-1 {
                margin-left: 8.33333%;
            }

            .offset-lg-2 {
                margin-left: 16.66667%;
            }

            .offset-lg-3 {
                margin-left: 25%;
            }

            .offset-lg-4 {
                margin-left: 33.33333%;
            }

            .offset-lg-5 {
                margin-left: 41.66667%;
            }

            .offset-lg-6 {
                margin-left: 50%;
            }

            .offset-lg-7 {
                margin-left: 58.33333%;
            }

            .offset-lg-8 {
                margin-left: 66.66667%;
            }

            .offset-lg-9 {
                margin-left: 75%;
            }

            .offset-lg-10 {
                margin-left: 83.33333%;
            }

            .offset-lg-11 {
                margin-left: 91.66667%;
            }
        }

        @media (min-width: 1200px) {
            .col-xl {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-xl-1 > * {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-xl-2 > * {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-xl-3 > * {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .row-cols-xl-4 > * {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-xl-5 > * {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-xl-6 > * {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-xl-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-xl-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%;
            }

            .col-xl-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .col-xl-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-xl-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
            }

            .col-xl-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }

            .col-xl-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-xl-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%;
            }

            .col-xl-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%;
            }

            .col-xl-9 {
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-xl-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%;
            }

            .col-xl-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%;
            }

            .col-xl-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-xl-first {
                order: -1;
            }

            .order-xl-last {
                order: 13;
            }

            .order-xl-0 {
                order: 0;
            }

            .order-xl-1 {
                order: 1;
            }

            .order-xl-2 {
                order: 2;
            }

            .order-xl-3 {
                order: 3;
            }

            .order-xl-4 {
                order: 4;
            }

            .order-xl-5 {
                order: 5;
            }

            .order-xl-6 {
                order: 6;
            }

            .order-xl-7 {
                order: 7;
            }

            .order-xl-8 {
                order: 8;
            }

            .order-xl-9 {
                order: 9;
            }

            .order-xl-10 {
                order: 10;
            }

            .order-xl-11 {
                order: 11;
            }

            .order-xl-12 {
                order: 12;
            }

            .offset-xl-0 {
                margin-left: 0;
            }

            .offset-xl-1 {
                margin-left: 8.33333%;
            }

            .offset-xl-2 {
                margin-left: 16.66667%;
            }

            .offset-xl-3 {
                margin-left: 25%;
            }

            .offset-xl-4 {
                margin-left: 33.33333%;
            }

            .offset-xl-5 {
                margin-left: 41.66667%;
            }

            .offset-xl-6 {
                margin-left: 50%;
            }

            .offset-xl-7 {
                margin-left: 58.33333%;
            }

            .offset-xl-8 {
                margin-left: 66.66667%;
            }

            .offset-xl-9 {
                margin-left: 75%;
            }

            .offset-xl-10 {
                margin-left: 83.33333%;
            }

            .offset-xl-11 {
                margin-left: 91.66667%;
            }
        }

        .table {
            width: 100%;
            margin-bottom: 1.5rem;
            color: #12263f;
        }

        .table td,
        .table th {
            padding: 1rem;
            vertical-align: top;
            border-top: 1px solid #edf2f9;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #edf2f9;
        }

        .table tbody + tbody {
            border-top: 2px solid #edf2f9;
        }

        .table-sm td,
        .table-sm th {
            padding: 1rem;
        }

        .table-bordered {
            border: 1px solid #edf2f9;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #edf2f9;
        }

        .table-bordered thead td,
        .table-bordered thead th {
            border-bottom-width: 2px;
        }

        .table-borderless tbody + tbody,
        .table-borderless td,
        .table-borderless th,
        .table-borderless thead th {
            border: 0;
        }

        .table-striped tbody tr:nth-of-type(even),
        .flat-table tbody tr:nth-of-type(even) {
            background-color: #f6f7f9;
        }

        .table-hover tbody tr:hover {
            color: #12263f;
            background-color: #f9fbfd;
        }

        .table-primary,
        .table-primary > td,
        .table-primary > th {
            background-color: #c4daf8;
        }

        .table-primary tbody + tbody,
        .table-primary td,
        .table-primary th,
        .table-primary thead th {
            border-color: #91baf1;
        }

        .table-hover .table-primary:hover {
            background-color: #adccf5;
        }

        .table-hover .table-primary:hover > td,
        .table-hover .table-primary:hover > th {
            background-color: #adccf5;
        }

        .table-secondary,
        .table-secondary > td,
        .table-secondary > th {
            background-color: #d6dde5;
        }

        .table-secondary tbody + tbody,
        .table-secondary td,
        .table-secondary th,
        .table-secondary thead th {
            border-color: #b4bfcf;
        }

        .table-hover .table-secondary:hover {
            background-color: #c6d0db;
        }

        .table-hover .table-secondary:hover > td,
        .table-hover .table-secondary:hover > th {
            background-color: #c6d0db;
        }

        .table-success,
        .table-success > td,
        .table-success > th {
            background-color: #b8f4db;
        }

        .table-success tbody + tbody,
        .table-success td,
        .table-success th,
        .table-success thead th {
            border-color: #7aebbc;
        }

        .table-hover .table-success:hover {
            background-color: #a2f1d0;
        }

        .table-hover .table-success:hover > td,
        .table-hover .table-success:hover > th {
            background-color: #a2f1d0;
        }

        .table-info,
        .table-info > td,
        .table-info > th {
            background-color: #c8e9f2;
        }

        .table-info tbody + tbody,
        .table-info td,
        .table-info th,
        .table-info thead th {
            border-color: #98d5e7;
        }

        .table-hover .table-info:hover {
            background-color: #b3e1ed;
        }

        .table-hover .table-info:hover > td,
        .table-hover .table-info:hover > th {
            background-color: #b3e1ed;
        }

        .table-warning,
        .table-warning > td,
        .table-warning > th {
            background-color: #fceeca;
        }

        .table-warning tbody + tbody,
        .table-warning td,
        .table-warning th,
        .table-warning thead th {
            border-color: #fae09d;
        }

        .table-hover .table-warning:hover {
            background-color: #fbe6b2;
        }

        .table-hover .table-warning:hover > td,
        .table-hover .table-warning:hover > th {
            background-color: #fbe6b2;
        }

        .table-danger,
        .table-danger > td,
        .table-danger > th {
            background-color: #f8c7d0;
        }

        .table-danger tbody + tbody,
        .table-danger td,
        .table-danger th,
        .table-danger thead th {
            border-color: #f297a8;
        }

        .table-hover .table-danger:hover {
            background-color: #f5b0bd;
        }

        .table-hover .table-danger:hover > td,
        .table-hover .table-danger:hover > th {
            background-color: #f5b0bd;
        }

        .table-light,
        .table-light > td,
        .table-light > th {
            background-color: #fafbfd;
        }

        .table-light tbody + tbody,
        .table-light td,
        .table-light th,
        .table-light thead th {
            border-color: #f6f8fc;
        }

        .table-hover .table-light:hover {
            background-color: #e8ecf6;
        }

        .table-hover .table-light:hover > td,
        .table-hover .table-light:hover > th {
            background-color: #e8ecf6;
        }

        .table-dark,
        .table-dark > td,
        .table-dark > th {
            background-color: #bdc2c9;
        }

        .table-dark tbody + tbody,
        .table-dark td,
        .table-dark th,
        .table-dark thead th {
            border-color: #848e9b;
        }

        .table-hover .table-dark:hover {
            background-color: #afb5be;
        }

        .table-hover .table-dark:hover > td,
        .table-hover .table-dark:hover > th {
            background-color: #afb5be;
        }

        .table-white,
        .table-white > td,
        .table-white > th {
            background-color: #fff;
        }

        .table-white tbody + tbody,
        .table-white td,
        .table-white th,
        .table-white thead th {
            border-color: #fff;
        }

        .table-hover .table-white:hover {
            background-color: #f2f2f2;
        }

        .table-hover .table-white:hover > td,
        .table-hover .table-white:hover > th {
            background-color: #f2f2f2;
        }

        .table-active,
        .table-active > td,
        .table-active > th {
            background-color: #f9fbfd;
        }

        .table-hover .table-active:hover {
            background-color: #e6eef7;
        }

        .table-hover .table-active:hover > td,
        .table-hover .table-active:hover > th {
            background-color: #e6eef7;
        }

        .table .thead-dark th {
            color: #fff;
            background-color: #3b506c;
            border-color: #496285;
        }

        .table .thead-light th {
            color: #95aac9;
            background-color: #f9fbfd;
            border-color: #edf2f9;
        }

        .table-dark {
            color: #fff;
            background-color: #3b506c;
        }

        .table-dark td,
        .table-dark th,
        .table-dark thead th {
            border-color: #496285;
        }

        .table-dark.table-bordered {
            border: 0;
        }

        .table-dark.table-striped tbody tr:nth-of-type(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.075);
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-sm > .table-bordered {
                border: 0;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-md > .table-bordered {
                border: 0;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-lg > .table-bordered {
                border: 0;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-xl > .table-bordered {
                border: 0;
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive > .table-bordered {
            border: 0;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 0.75rem;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.5;
            color: #12263f;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #d2ddec;
            border-radius: 0.375rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control {
                transition: none;
            }
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0;
        }

        .form-control:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #12263f;
        }

        .form-control:focus {
            color: #12263f;
            background-color: #fff;
            border-color: #2c7be5;
            outline: 0;
            box-shadow: transparent;
        }

        .form-control::-webkit-input-placeholder {
            color: #b1c2d9;
            opacity: 1;
        }

        .form-control::-moz-placeholder {
            color: #b1c2d9;
            opacity: 1;
        }

        .form-control:-ms-input-placeholder {
            color: #b1c2d9;
            opacity: 1;
        }

        .form-control::-ms-input-placeholder {
            color: #b1c2d9;
            opacity: 1;
        }

        .form-control::placeholder {
            color: #b1c2d9;
            opacity: 1;
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #fff;
            opacity: 1;
        }

        input[type="date"].form-control,
        input[type="datetime-local"].form-control,
        input[type="month"].form-control,
        input[type="time"].form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        select.form-control:focus::-ms-value {
            color: #12263f;
            background-color: #fff;
        }

        .form-control-file,
        .form-control-range {
            display: block;
            width: 100%;
        }

        .col-form-label {
            padding-top: calc(0.5rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
        }

        .col-form-label-lg {
            padding-top: calc(0.75rem + 1px);
            padding-bottom: calc(0.75rem + 1px);
            font-size: 0.9375rem;
            line-height: 1.5;
        }

        .col-form-label-sm {
            padding-top: calc(0.125rem + 1px);
            padding-bottom: calc(0.125rem + 1px);
            font-size: 0.8125rem;
            line-height: 1.75;
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: 0.5rem 0;
            margin-bottom: 0;
            font-size: 0.9375rem;
            line-height: 1.5;
            color: #12263f;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0;
        }

        .form-control-plaintext.form-control-lg,
        .form-control-plaintext.form-control-sm {
            padding-right: 0;
            padding-left: 0;
        }

        .form-control-sm {
            height: calc(1.75em + 0.25rem + 2px);
            padding: 0.125rem 0.5rem;
            font-size: 0.8125rem;
            line-height: 1.75;
            border-radius: 0.25rem;
        }

        .form-control-lg {
            height: calc(1.5em + 1.5rem + 2px);
            padding: 0.75rem 1.25rem;
            font-size: 0.9375rem;
            line-height: 1.5;
            border-radius: 0.5rem;
        }

        select.form-control[multiple],
        select.form-control[size] {
            height: auto;
        }

        textarea.form-control {
            height: auto;
        }

        .form-group {
            margin-bottom: 1.375rem;
        }

        .form-text {
            display: block;
            margin-top: 0.25rem;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px;
        }

        .form-row > .col,
        .form-row > [class*="col-"] {
            padding-right: 5px;
            padding-left: 5px;
        }

        .form-check {
            position: relative;
            display: block;
            padding-left: 1.25rem;
        }

        .form-check-input {
            position: absolute;
            margin-top: 0.3rem;
            margin-left: -1.25rem;
        }

        .form-check-input:disabled ~ .form-check-label,
        .form-check-input[disabled] ~ .form-check-label {
            color: #95aac9;
        }

        .form-check-label {
            margin-bottom: 0;
        }

        .form-check-inline {
            display: inline-flex;
            align-items: center;
            padding-left: 0;
            margin-right: 0.75rem;
        }

        .form-check-inline .form-check-input {
            position: static;
            margin-top: 0;
            margin-right: 0.3125rem;
            margin-left: 0;
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.8125rem;
            color: #00d97e;
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.8125rem;
            line-height: 1.5;
            color: #fff;
            background-color: #00d97e;
            border-radius: 0.375rem;
        }

        .form-row > .col > .valid-tooltip,
        .form-row > [class*="col-"] > .valid-tooltip {
            left: 5px;
        }

        .is-valid ~ .valid-feedback,
        .is-valid ~ .valid-tooltip,
        .was-validated :valid ~ .valid-feedback,
        .was-validated :valid ~ .valid-tooltip {
            display: block;
        }

        .form-control.is-valid,
        .was-validated .form-control:valid {
            border-color: #00d97e;
        }

        .form-control.is-valid:focus,
        .was-validated .form-control:valid:focus {
            border-color: #00d97e;
            box-shadow: 0 0 0 0.15rem rgba(0, 217, 126, 0.25);
        }

        .custom-select.is-valid,
        .was-validated .custom-select:valid {
            border-color: #00d97e;
        }

        .custom-select.is-valid:focus,
        .was-validated .custom-select:valid:focus {
            border-color: #00d97e;
            box-shadow: 0 0 0 0.15rem rgba(0, 217, 126, 0.25);
        }

        .form-check-input.is-valid ~ .form-check-label,
        .was-validated .form-check-input:valid ~ .form-check-label {
            color: #00d97e;
        }

        .form-check-input.is-valid ~ .valid-feedback,
        .form-check-input.is-valid ~ .valid-tooltip,
        .was-validated .form-check-input:valid ~ .valid-feedback,
        .was-validated .form-check-input:valid ~ .valid-tooltip {
            display: block;
        }

        .custom-control-input.is-valid ~ .custom-control-label,
        .was-validated .custom-control-input:valid ~ .custom-control-label {
            color: #00d97e;
        }

        .custom-control-input.is-valid ~ .custom-control-label::before,
        .was-validated .custom-control-input:valid ~ .custom-control-label::before {
            border-color: #00d97e;
        }

        .custom-control-input.is-valid:checked ~ .custom-control-label::before,
        .was-validated .custom-control-input:valid:checked ~ .custom-control-label::before {
            border-color: #0dff9a;
            background-color: #0dff9a;
        }

        .custom-control-input.is-valid:focus ~ .custom-control-label::before,
        .was-validated .custom-control-input:valid:focus ~ .custom-control-label::before {
            box-shadow: 0 0 0 0.15rem rgba(0, 217, 126, 0.25);
        }

        .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before,
        .was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before {
            border-color: #00d97e;
        }

        .custom-file-input.is-valid ~ .custom-file-label,
        .was-validated .custom-file-input:valid ~ .custom-file-label {
            border-color: #00d97e;
        }

        .custom-file-input.is-valid:focus ~ .custom-file-label,
        .was-validated .custom-file-input:valid:focus ~ .custom-file-label {
            border-color: #00d97e;
            box-shadow: 0 0 0 0.15rem rgba(0, 217, 126, 0.25);
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.8125rem;
            color: #e63757;
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.8125rem;
            line-height: 1.5;
            color: #fff;
            background-color: #e63757;
            border-radius: 0.375rem;
        }

        .form-row > .col > .invalid-tooltip,
        .form-row > [class*="col-"] > .invalid-tooltip {
            left: 5px;
        }

        .is-invalid ~ .invalid-feedback,
        .is-invalid ~ .invalid-tooltip,
        .was-validated :invalid ~ .invalid-feedback,
        .was-validated :invalid ~ .invalid-tooltip {
            display: block;
        }

        .form-control.is-invalid,
        .was-validated .form-control:invalid {
            border-color: #e63757;
        }

        .form-control.is-invalid:focus,
        .was-validated .form-control:invalid:focus {
            border-color: #e63757;
            box-shadow: 0 0 0 0.15rem rgba(230, 55, 87, 0.25);
        }

        .custom-select.is-invalid,
        .was-validated .custom-select:invalid {
            border-color: #e63757;
        }

        .custom-select.is-invalid:focus,
        .was-validated .custom-select:invalid:focus {
            border-color: #e63757;
            box-shadow: 0 0 0 0.15rem rgba(230, 55, 87, 0.25);
        }

        .form-check-input.is-invalid ~ .form-check-label,
        .was-validated .form-check-input:invalid ~ .form-check-label {
            color: #e63757;
        }

        .form-check-input.is-invalid ~ .invalid-feedback,
        .form-check-input.is-invalid ~ .invalid-tooltip,
        .was-validated .form-check-input:invalid ~ .invalid-feedback,
        .was-validated .form-check-input:invalid ~ .invalid-tooltip {
            display: block;
        }

        .custom-control-input.is-invalid ~ .custom-control-label,
        .was-validated .custom-control-input:invalid ~ .custom-control-label {
            color: #e63757;
        }

        .custom-control-input.is-invalid ~ .custom-control-label::before,
        .was-validated .custom-control-input:invalid ~ .custom-control-label::before {
            border-color: #e63757;
        }

        .custom-control-input.is-invalid:checked ~ .custom-control-label::before,
        .was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before {
            border-color: #ec647d;
            background-color: #ec647d;
        }

        .custom-control-input.is-invalid:focus ~ .custom-control-label::before,
        .was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before {
            box-shadow: 0 0 0 0.15rem rgba(230, 55, 87, 0.25);
        }

        .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before,
        .was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before {
            border-color: #e63757;
        }

        .custom-file-input.is-invalid ~ .custom-file-label,
        .was-validated .custom-file-input:invalid ~ .custom-file-label {
            border-color: #e63757;
        }

        .custom-file-input.is-invalid:focus ~ .custom-file-label,
        .was-validated .custom-file-input:invalid:focus ~ .custom-file-label {
            border-color: #e63757;
            box-shadow: 0 0 0 0.15rem rgba(230, 55, 87, 0.25);
        }

        .form-inline {
            display: flex;
            flex-flow: row wrap;
            align-items: center;
        }

        .form-inline .form-check {
            width: 100%;
        }

        @media (min-width: 576px) {
            .form-inline label {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 0;
            }

            .form-inline .form-group {
                display: flex;
                flex: 0 0 auto;
                flex-flow: row wrap;
                align-items: center;
                margin-bottom: 0;
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle;
            }

            .form-inline .form-control-plaintext {
                display: inline-block;
            }

            .form-inline .custom-select,
            .form-inline .input-group {
                width: auto;
            }

            .form-inline .form-check {
                display: flex;
                align-items: center;
                justify-content: center;
                width: auto;
                padding-left: 0;
            }

            .form-inline .form-check-input {
                position: relative;
                flex-shrink: 0;
                margin-top: 0;
                margin-right: 0.25rem;
                margin-left: 0;
            }

            .form-inline .custom-control {
                align-items: center;
                justify-content: center;
            }

            .form-inline .custom-control-label {
                margin-bottom: 0;
            }
        }

        .btn {
            display: inline-block;
            font-weight: 500;
            color: #12263f;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.5rem 0.75rem;
            font-size: 16px;
            line-height: 1.5;
            border-radius: 0.375rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .btn {
                transition: none;
            }
        }

        .btn:hover {
            color: #12263f;
            text-decoration: none;
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            box-shadow: 0 0 0 0.15rem rgba(44, 123, 229, 0.25);
        }

        .btn.disabled,
        .btn:disabled {
            opacity: 0.65;
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer;
        }

        a.btn.disabled,
        fieldset:disabled a.btn {
            pointer-events: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #ff7276;
            border-color: #ff7276;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #ff7276;
            border-color: #ff7276;
        }

        .btn-primary.focus,
        .btn-primary:focus {
            color: #fff;
            background-color: #ff7276;
            border-color: #ff7276;
            box-shadow: 0 0 0 0.15rem rgba(233, 76, 76, 0.5);
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            color: #fff;
            background-color: #ff7276;
            border-color: #ff7276;
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show > .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #1862c6;
            border-color: #175dba;
        }

        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .show > .btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(76, 143, 233, 0.5);
        }

        .btn-secondary {
            color: #fff;
            background-color: #6e84a3;
            border-color: #6e84a3;
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #5b7190;
            border-color: #566b88;
        }

        .btn-secondary.focus,
        .btn-secondary:focus {
            color: #fff;
            background-color: #5b7190;
            border-color: #566b88;
            box-shadow: 0 0 0 0.15rem rgba(132, 150, 177, 0.5);
        }

        .btn-secondary.disabled,
        .btn-secondary:disabled {
            color: #fff;
            background-color: #6e84a3;
            border-color: #6e84a3;
        }

        .btn-secondary:not(:disabled):not(.disabled).active,
        .btn-secondary:not(:disabled):not(.disabled):active,
        .show > .btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #566b88;
            border-color: #516580;
        }

        .btn-secondary:not(:disabled):not(.disabled).active:focus,
        .btn-secondary:not(:disabled):not(.disabled):active:focus,
        .show > .btn-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(132, 150, 177, 0.5);
        }

        .btn-success {
            color: #fff;
            background-color: #00d97e;
            border-color: #00d97e;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #00b368;
            border-color: #00a660;
        }

        .btn-success.focus,
        .btn-success:focus {
            color: #fff;
            background-color: #00b368;
            border-color: #00a660;
            box-shadow: 0 0 0 0.15rem rgba(38, 223, 145, 0.5);
        }

        .btn-success.disabled,
        .btn-success:disabled {
            color: #fff;
            background-color: #00d97e;
            border-color: #00d97e;
        }

        .btn-success:not(:disabled):not(.disabled).active,
        .btn-success:not(:disabled):not(.disabled):active,
        .show > .btn-success.dropdown-toggle {
            color: #fff;
            background-color: #00a660;
            border-color: #009959;
        }

        .btn-success:not(:disabled):not(.disabled).active:focus,
        .btn-success:not(:disabled):not(.disabled):active:focus,
        .show > .btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(38, 223, 145, 0.5);
        }

        .btn-info {
            color: #fff;
            background-color: #39afd1;
            border-color: #39afd1;
        }

        .btn-info:hover {
            color: #fff;
            background-color: #2b99b9;
            border-color: #2991ae;
        }

        .btn-info.focus,
        .btn-info:focus {
            color: #fff;
            background-color: #2b99b9;
            border-color: #2991ae;
            box-shadow: 0 0 0 0.15rem rgba(87, 187, 216, 0.5);
        }

        .btn-info.disabled,
        .btn-info:disabled {
            color: #fff;
            background-color: #39afd1;
            border-color: #39afd1;
        }

        .btn-info:not(:disabled):not(.disabled).active,
        .btn-info:not(:disabled):not(.disabled):active,
        .show > .btn-info.dropdown-toggle {
            color: #fff;
            background-color: #2991ae;
            border-color: #2688a4;
        }

        .btn-info:not(:disabled):not(.disabled).active:focus,
        .btn-info:not(:disabled):not(.disabled):active:focus,
        .show > .btn-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(87, 187, 216, 0.5);
        }

        .btn-warning {
            color: #283e59;
            background-color: #f6c343;
            border-color: #f6c343;
        }

        .btn-warning:hover {
            color: #283e59;
            background-color: #f4b71e;
            border-color: #f4b312;
        }

        .btn-warning.focus,
        .btn-warning:focus {
            color: #283e59;
            background-color: #f4b71e;
            border-color: #f4b312;
            box-shadow: 0 0 0 0.15rem rgba(215, 175, 70, 0.5);
        }

        .btn-warning.disabled,
        .btn-warning:disabled {
            color: #283e59;
            background-color: #f6c343;
            border-color: #f6c343;
        }

        .btn-warning:not(:disabled):not(.disabled).active,
        .btn-warning:not(:disabled):not(.disabled):active,
        .show > .btn-warning.dropdown-toggle {
            color: #283e59;
            background-color: #f4b312;
            border-color: #eead0b;
        }

        .btn-warning:not(:disabled):not(.disabled).active:focus,
        .btn-warning:not(:disabled):not(.disabled):active:focus,
        .show > .btn-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(215, 175, 70, 0.5);
        }

        .btn-danger {
            color: #fff;
            background-color: #e63757;
            border-color: #e63757;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #db1b3f;
            border-color: #d01a3b;
        }

        .btn-danger.focus,
        .btn-danger:focus {
            color: #fff;
            background-color: #db1b3f;
            border-color: #d01a3b;
            box-shadow: 0 0 0 0.15rem rgba(234, 85, 112, 0.5);
        }

        .btn-danger.disabled,
        .btn-danger:disabled {
            color: #fff;
            background-color: #e63757;
            border-color: #e63757;
        }

        .btn-danger:not(:disabled):not(.disabled).active,
        .btn-danger:not(:disabled):not(.disabled):active,
        .show > .btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #d01a3b;
            border-color: #c51938;
        }

        .btn-danger:not(:disabled):not(.disabled).active:focus,
        .btn-danger:not(:disabled):not(.disabled):active:focus,
        .show > .btn-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(234, 85, 112, 0.5);
        }

        .btn-light {
            color: #283e59;
            background-color: #edf2f9;
            border-color: #edf2f9;
        }

        .btn-light:hover {
            color: #283e59;
            background-color: #d0ddef;
            border-color: #c7d6ec;
        }

        .btn-light.focus,
        .btn-light:focus {
            color: #283e59;
            background-color: #d0ddef;
            border-color: #c7d6ec;
            box-shadow: 0 0 0 0.15rem rgba(207, 215, 225, 0.5);
        }

        .btn-light.disabled,
        .btn-light:disabled {
            color: #283e59;
            background-color: #edf2f9;
            border-color: #edf2f9;
        }

        .btn-light:not(:disabled):not(.disabled).active,
        .btn-light:not(:disabled):not(.disabled):active,
        .show > .btn-light.dropdown-toggle {
            color: #283e59;
            background-color: #c7d6ec;
            border-color: #bdcfe9;
        }

        .btn-light:not(:disabled):not(.disabled).active:focus,
        .btn-light:not(:disabled):not(.disabled):active:focus,
        .show > .btn-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(207, 215, 225, 0.5);
        }

        .btn-dark {
            color: #fff;
            background-color: #12263f;
            border-color: #12263f;
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #0a1421;
            border-color: #070e17;
        }

        .btn-dark.focus,
        .btn-dark:focus {
            color: #fff;
            background-color: #0a1421;
            border-color: #070e17;
            box-shadow: 0 0 0 0.15rem rgba(54, 71, 92, 0.5);
        }

        .btn-dark.disabled,
        .btn-dark:disabled {
            color: #fff;
            background-color: #12263f;
            border-color: #12263f;
        }

        .btn-dark:not(:disabled):not(.disabled).active,
        .btn-dark:not(:disabled):not(.disabled):active,
        .show > .btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #070e17;
            border-color: #04080d;
        }

        .btn-dark:not(:disabled):not(.disabled).active:focus,
        .btn-dark:not(:disabled):not(.disabled):active:focus,
        .show > .btn-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(54, 71, 92, 0.5);
        }

        .btn-white {
            color: #283e59;
            background-color: #fff;
            border-color: #fff;
            padding: 0;
        }

        .btn-white:hover {
            color: #283e59;
            background-color: #ececec;
            border-color: #e6e6e6;
        }

        .btn-white.focus,
        .btn-white:focus {
            color: #283e59;
            background-color: #ececec;
            border-color: #e6e6e6;
            box-shadow: 0 0 0 0.15rem rgba(223, 226, 230, 0.5);
        }

        .btn-white.disabled,
        .btn-white:disabled {
            color: #283e59;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-white:not(:disabled):not(.disabled).active,
        .btn-white:not(:disabled):not(.disabled):active,
        .show > .btn-white.dropdown-toggle {
            color: #283e59;
            background-color: #e6e6e6;
            border-color: #dfdfdf;
        }

        .btn-white:not(:disabled):not(.disabled).active:focus,
        .btn-white:not(:disabled):not(.disabled):active:focus,
        .show > .btn-white.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(223, 226, 230, 0.5);
        }

        .btn-outline-primary {
            color: #2c7be5;
            border-color: #2c7be5;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #2c7be5;
            border-color: #2c7be5;
        }

        .btn-outline-primary.focus,
        .btn-outline-primary:focus {
            box-shadow: 0 0 0 0.15rem rgba(44, 123, 229, 0.5);
        }

        .btn-outline-primary.disabled,
        .btn-outline-primary:disabled {
            color: #2c7be5;
            background-color: transparent;
        }

        .btn-outline-primary:not(:disabled):not(.disabled).active,
        .btn-outline-primary:not(:disabled):not(.disabled):active,
        .show > .btn-outline-primary.dropdown-toggle {
            color: #fff;
            background-color: #2c7be5;
            border-color: #2c7be5;
        }

        .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
        .show > .btn-outline-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(44, 123, 229, 0.5);
        }

        .btn-outline-secondary {
            color: #6e84a3;
            border-color: #6e84a3;
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #6e84a3;
            border-color: #6e84a3;
        }

        .btn-outline-secondary.focus,
        .btn-outline-secondary:focus {
            box-shadow: 0 0 0 0.15rem rgba(110, 132, 163, 0.5);
        }

        .btn-outline-secondary.disabled,
        .btn-outline-secondary:disabled {
            color: #6e84a3;
            background-color: transparent;
        }

        .btn-outline-secondary:not(:disabled):not(.disabled).active,
        .btn-outline-secondary:not(:disabled):not(.disabled):active,
        .show > .btn-outline-secondary.dropdown-toggle {
            color: #fff;
            background-color: #6e84a3;
            border-color: #6e84a3;
        }

        .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
        .show > .btn-outline-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(110, 132, 163, 0.5);
        }

        .btn-outline-success {
            color: #00d97e;
            border-color: #00d97e;
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #00d97e;
            border-color: #00d97e;
        }

        .btn-outline-success.focus,
        .btn-outline-success:focus {
            box-shadow: 0 0 0 0.15rem rgba(0, 217, 126, 0.5);
        }

        .btn-outline-success.disabled,
        .btn-outline-success:disabled {
            color: #00d97e;
            background-color: transparent;
        }

        .btn-outline-success:not(:disabled):not(.disabled).active,
        .btn-outline-success:not(:disabled):not(.disabled):active,
        .show > .btn-outline-success.dropdown-toggle {
            color: #fff;
            background-color: #00d97e;
            border-color: #00d97e;
        }

        .btn-outline-success:not(:disabled):not(.disabled).active:focus,
        .btn-outline-success:not(:disabled):not(.disabled):active:focus,
        .show > .btn-outline-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(0, 217, 126, 0.5);
        }

        .btn-outline-info {
            color: #39afd1;
            border-color: #39afd1;
        }

        .btn-outline-info:hover {
            color: #fff;
            background-color: #39afd1;
            border-color: #39afd1;
        }

        .btn-outline-info.focus,
        .btn-outline-info:focus {
            box-shadow: 0 0 0 0.15rem rgba(57, 175, 209, 0.5);
        }

        .btn-outline-info.disabled,
        .btn-outline-info:disabled {
            color: #39afd1;
            background-color: transparent;
        }

        .btn-outline-info:not(:disabled):not(.disabled).active,
        .btn-outline-info:not(:disabled):not(.disabled):active,
        .show > .btn-outline-info.dropdown-toggle {
            color: #fff;
            background-color: #39afd1;
            border-color: #39afd1;
        }

        .btn-outline-info:not(:disabled):not(.disabled).active:focus,
        .btn-outline-info:not(:disabled):not(.disabled):active:focus,
        .show > .btn-outline-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(57, 175, 209, 0.5);
        }

        .btn-outline-warning {
            color: #f6c343;
            border-color: #f6c343;
        }

        .btn-outline-warning:hover {
            color: #283e59;
            background-color: #f6c343;
            border-color: #f6c343;
        }

        .btn-outline-warning.focus,
        .btn-outline-warning:focus {
            box-shadow: 0 0 0 0.15rem rgba(246, 195, 67, 0.5);
        }

        .btn-outline-warning.disabled,
        .btn-outline-warning:disabled {
            color: #f6c343;
            background-color: transparent;
        }

        .btn-outline-warning:not(:disabled):not(.disabled).active,
        .btn-outline-warning:not(:disabled):not(.disabled):active,
        .show > .btn-outline-warning.dropdown-toggle {
            color: #283e59;
            background-color: #f6c343;
            border-color: #f6c343;
        }

        .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
        .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
        .show > .btn-outline-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(246, 195, 67, 0.5);
        }

        .btn-outline-danger {
            color: #e63757;
            border-color: #e63757;
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #e63757;
            border-color: #e63757;
        }

        .btn-outline-danger.focus,
        .btn-outline-danger:focus {
            box-shadow: 0 0 0 0.15rem rgba(230, 55, 87, 0.5);
        }

        .btn-outline-danger.disabled,
        .btn-outline-danger:disabled {
            color: #e63757;
            background-color: transparent;
        }

        .btn-outline-danger:not(:disabled):not(.disabled).active,
        .btn-outline-danger:not(:disabled):not(.disabled):active,
        .show > .btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #e63757;
            border-color: #e63757;
        }

        .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
        .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
        .show > .btn-outline-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(230, 55, 87, 0.5);
        }

        .btn-outline-light {
            color: #edf2f9;
            border-color: #edf2f9;
        }

        .btn-outline-light:hover {
            color: #283e59;
            background-color: #edf2f9;
            border-color: #edf2f9;
        }

        .btn-outline-light.focus,
        .btn-outline-light:focus {
            box-shadow: 0 0 0 0.15rem rgba(237, 242, 249, 0.5);
        }

        .btn-outline-light.disabled,
        .btn-outline-light:disabled {
            color: #edf2f9;
            background-color: transparent;
        }

        .btn-outline-light:not(:disabled):not(.disabled).active,
        .btn-outline-light:not(:disabled):not(.disabled):active,
        .show > .btn-outline-light.dropdown-toggle {
            color: #283e59;
            background-color: #edf2f9;
            border-color: #edf2f9;
        }

        .btn-outline-light:not(:disabled):not(.disabled).active:focus,
        .btn-outline-light:not(:disabled):not(.disabled):active:focus,
        .show > .btn-outline-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(237, 242, 249, 0.5);
        }

        .btn-outline-dark {
            color: #12263f;
            border-color: #12263f;
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #12263f;
            border-color: #12263f;
        }

        .btn-outline-dark.focus,
        .btn-outline-dark:focus {
            box-shadow: 0 0 0 0.15rem rgba(18, 38, 63, 0.5);
        }

        .btn-outline-dark.disabled,
        .btn-outline-dark:disabled {
            color: #12263f;
            background-color: transparent;
        }

        .btn-outline-dark:not(:disabled):not(.disabled).active,
        .btn-outline-dark:not(:disabled):not(.disabled):active,
        .show > .btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #12263f;
            border-color: #12263f;
        }

        .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
        .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
        .show > .btn-outline-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(18, 38, 63, 0.5);
        }

        .btn-outline-white {
            color: #fff;
            border-color: #fff;
        }

        .btn-outline-white:hover {
            color: #283e59;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-outline-white.focus,
        .btn-outline-white:focus {
            box-shadow: 0 0 0 0.15rem rgba(255, 255, 255, 0.5);
        }

        .btn-outline-white.disabled,
        .btn-outline-white:disabled {
            color: #fff;
            background-color: transparent;
        }

        .btn-outline-white:not(:disabled):not(.disabled).active,
        .btn-outline-white:not(:disabled):not(.disabled):active,
        .show > .btn-outline-white.dropdown-toggle {
            color: #283e59;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-outline-white:not(:disabled):not(.disabled).active:focus,
        .btn-outline-white:not(:disabled):not(.disabled):active:focus,
        .show > .btn-outline-white.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.15rem rgba(255, 255, 255, 0.5);
        }

        .btn-link {
            font-weight: 400;
            color: #2c7be5;
            text-decoration: none;
        }

        .btn-link:hover {
            color: #1657af;
            text-decoration: none;
        }

        .btn-link.focus,
        .btn-link:focus {
            text-decoration: none;
        }

        .btn-link.disabled,
        .btn-link:disabled {
            color: #b1c2d9;
            pointer-events: none;
        }

        .btn-group-lg > .btn,
        .btn-lg {
            padding: 0.75rem 1.25rem;
            font-size: 0.9375rem;
            line-height: 1.5;
            border-radius: 0.5rem;
        }

        .btn-group-sm > .btn,
        .btn-sm {
            padding: 0.125rem 0.5rem;
            font-size: 0.8125rem;
            line-height: 1.75;
            border-radius: 0.25rem;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .btn-block + .btn-block {
            margin-top: 0.5rem;
        }

        input[type="button"].btn-block,
        input[type="reset"].btn-block,
        input[type="submit"].btn-block {
            width: 100%;
        }

        .fade {
            transition: opacity 0.15s linear;
        }

        @media (prefers-reduced-motion: reduce) {
            .fade {
                transition: none;
            }
        }

        .fade:not(.show) {
            opacity: 0;
        }

        /* .collapse:not(.show) {
  display: none;
} */

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            transition: height 0.35s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .collapsing {
                transition: none;
            }
        }

        .dropdown,
        .dropleft,
        .dropright,
        .dropup {
            position: relative;
        }

        .dropdown-toggle {
            white-space: nowrap;
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.2125em;
            vertical-align: 0.2125em;
            content: "";
            border-top: 0.25em solid;
            border-right: 0.25em solid transparent;
            border-bottom: 0;
            border-left: 0.25em solid transparent;
        }

        .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: 0.5rem 0;
            margin: 0 0 0;
            font-size: 0.9375rem;
            color: #12263f;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(18, 38, 63, 0.1);
            border-radius: 0.375rem;
        }

        .dropdown-menu-left {
            right: auto;
            left: 0;
        }

        .dropdown-menu-right {
            right: 0;
            left: auto;
        }

        @media (min-width: 576px) {
            .dropdown-menu-sm-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-sm-right {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 768px) {
            .dropdown-menu-md-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-md-right {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 992px) {
            .dropdown-menu-lg-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-lg-right {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 1200px) {
            .dropdown-menu-xl-left {
                right: auto;
                left: 0;
            }

            .dropdown-menu-xl-right {
                right: 0;
                left: auto;
            }
        }

        .dropup .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: 0;
        }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.2125em;
            vertical-align: 0.2125em;
            content: "";
            border-top: 0;
            border-right: 0.25em solid transparent;
            border-bottom: 0.25em solid;
            border-left: 0.25em solid transparent;
        }

        .dropup .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropright .dropdown-menu {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: 0;
        }

        .dropright .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.2125em;
            vertical-align: 0.2125em;
            content: "";
            border-top: 0.25em solid transparent;
            border-right: 0;
            border-bottom: 0.25em solid transparent;
            border-left: 0.25em solid;
        }

        .dropright .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropright .dropdown-toggle::after {
            vertical-align: 0;
        }

        .dropleft .dropdown-menu {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: 0;
        }

        .dropleft .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.2125em;
            vertical-align: 0.2125em;
            content: "";
        }

        .dropleft .dropdown-toggle::after {
            display: none;
        }

        .dropleft .dropdown-toggle::before {
            display: inline-block;
            margin-right: 0.2125em;
            vertical-align: 0.2125em;
            content: "";
            border-top: 0.25em solid transparent;
            border-right: 0.25em solid;
            border-bottom: 0.25em solid transparent;
        }

        .dropleft .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropleft .dropdown-toggle::before {
            vertical-align: 0;
        }

        .dropdown-menu[x-placement^="bottom"],
        .dropdown-menu[x-placement^="left"],
        .dropdown-menu[x-placement^="right"],
        .dropdown-menu[x-placement^="top"] {
            right: auto;
            bottom: auto;
        }

        .dropdown-divider {
            height: 0;
            margin: 0.75rem 0;
            overflow: hidden;
            border-top: 1px solid #edf2f9;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: 0.375rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #6e84a3;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            color: #12263f;
            text-decoration: none;
            background-color: transparent;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #12263f;
            text-decoration: none;
            background-color: transparent;
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            color: #b1c2d9;
            pointer-events: none;
            background-color: transparent;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-header {
            display: block;
            padding: 0.5rem 1.5rem;
            margin-bottom: 0;
            font-size: 0.8125rem;
            color: inherit;
            white-space: nowrap;
        }

        .dropdown-item-text {
            display: block;
            padding: 0.375rem 1.5rem;
            color: #6e84a3;
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-flex;
            vertical-align: middle;
        }

        .btn-group-vertical > .btn,
        .btn-group > .btn {
            position: relative;
            flex: 1 1 auto;
        }

        .btn-group-vertical > .btn:hover,
        .btn-group > .btn:hover {
            z-index: 1;
        }

        .btn-group-vertical > .btn.active,
        .btn-group-vertical > .btn:active,
        .btn-group-vertical > .btn:focus,
        .btn-group > .btn.active,
        .btn-group > .btn:active,
        .btn-group > .btn:focus {
            z-index: 1;
        }

        .btn-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .btn-toolbar .input-group {
            width: auto;
        }

        .btn-group > .btn-group:not(:first-child),
        .btn-group > .btn:not(:first-child) {
            margin-left: -1px;
        }

        .btn-group > .btn-group:not(:last-child) > .btn,
        .btn-group > .btn:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .btn-group > .btn-group:not(:first-child) > .btn,
        .btn-group > .btn:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .dropdown-toggle-split {
            padding-right: 0.5625rem;
            padding-left: 0.5625rem;
        }

        .dropdown-toggle-split::after,
        .dropright .dropdown-toggle-split::after,
        .dropup .dropdown-toggle-split::after {
            margin-left: 0;
        }

        .dropleft .dropdown-toggle-split::before {
            margin-right: 0;
        }

        .btn-group-sm > .btn + .dropdown-toggle-split,
        .btn-sm + .dropdown-toggle-split {
            padding-right: 0.375rem;
            padding-left: 0.375rem;
        }

        .btn-group-lg > .btn + .dropdown-toggle-split,
        .btn-lg + .dropdown-toggle-split {
            padding-right: 0.9375rem;
            padding-left: 0.9375rem;
        }

        .btn-group-vertical {
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }

        .btn-group-vertical > .btn,
        .btn-group-vertical > .btn-group {
            width: 100%;
        }

        .btn-group-vertical > .btn-group:not(:first-child),
        .btn-group-vertical > .btn:not(:first-child) {
            margin-top: -1px;
        }

        .btn-group-vertical > .btn-group:not(:last-child) > .btn,
        .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .btn-group-vertical > .btn-group:not(:first-child) > .btn,
        .btn-group-vertical > .btn:not(:first-child) {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .btn-group-toggle > .btn,
        .btn-group-toggle > .btn-group > .btn {
            margin-bottom: 0;
        }

        .btn-group-toggle > .btn input[type="checkbox"],
        .btn-group-toggle > .btn input[type="radio"],
        .btn-group-toggle > .btn-group > .btn input[type="checkbox"],
        .btn-group-toggle > .btn-group > .btn input[type="radio"] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
        }

        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%;
        }

        .input-group > .custom-file,
        .input-group > .custom-select,
        .input-group > .form-control,
        .input-group > .form-control-plaintext {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
            margin-bottom: 0;
        }

        .input-group > .custom-file + .custom-file,
        .input-group > .custom-file + .custom-select,
        .input-group > .custom-file + .form-control,
        .input-group > .custom-select + .custom-file,
        .input-group > .custom-select + .custom-select,
        .input-group > .custom-select + .form-control,
        .input-group > .form-control + .custom-file,
        .input-group > .form-control + .custom-select,
        .input-group > .form-control + .form-control,
        .input-group > .form-control-plaintext + .custom-file,
        .input-group > .form-control-plaintext + .custom-select,
        .input-group > .form-control-plaintext + .form-control {
            margin-left: -1px;
        }

        .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label,
        .input-group > .custom-select:focus,
        .input-group > .form-control:focus {
            z-index: 3;
        }

        .input-group > .custom-file .custom-file-input:focus {
            z-index: 4;
        }

        .input-group > .custom-select:not(:first-child),
        .input-group > .form-control:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .input-group > .custom-file {
            display: flex;
            align-items: center;
        }

        /* .input-group > .custom-file:not(:first-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group:not(.has-validation)
  > .custom-file:not(:last-child)
  .custom-file-label::after,
.input-group:not(.has-validation) > .custom-select:not(:last-child),
.input-group:not(.has-validation) > .form-control:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation
  > .custom-file:nth-last-child(n + 3)
  .custom-file-label::after,
.input-group.has-validation > .custom-select:nth-last-child(n + 3),
.input-group.has-validation > .form-control:nth-last-child(n + 3) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
} */

        .input-group-append,
        .input-group-prepend {
            display: flex;
        }

        .input-group-append .btn,
        .input-group-prepend .btn {
            position: relative;
            z-index: 2;
        }

        .input-group-append .btn:focus,
        .input-group-prepend .btn:focus {
            z-index: 3;
        }

        .input-group-append .btn + .btn,
        .input-group-append .btn + .input-group-text,
        .input-group-append .input-group-text + .btn,
        .input-group-append .input-group-text + .input-group-text,
        .input-group-prepend .btn + .btn,
        .input-group-prepend .btn + .input-group-text,
        .input-group-prepend .input-group-text + .btn,
        .input-group-prepend .input-group-text + .input-group-text {
            margin-left: -1px;
        }

        .input-group-prepend {
            margin-right: -1px;
        }

        .input-group-append {
            margin-left: -1px;
        }

        .input-group-text {
            display: flex;
            align-items: center;
            padding: 0.5rem 0.75rem;
            margin-bottom: 0;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.5;
            color: #95aac9;
            text-align: center;
            white-space: nowrap;
            background-color: #fff;
            border: 1px solid #d2ddec;
            border-radius: 0.375rem;
        }

        .input-group-text input[type="checkbox"],
        .input-group-text input[type="radio"] {
            margin-top: 0;
        }

        .input-group-lg > .custom-select,
        .input-group-lg > .form-control:not(textarea) {
            height: calc(1.5em + 1.5rem + 2px);
        }

        .input-group-lg > .custom-select,
        .input-group-lg > .form-control,
        .input-group-lg > .input-group-append > .btn,
        .input-group-lg > .input-group-append > .input-group-text,
        .input-group-lg > .input-group-prepend > .btn,
        .input-group-lg > .input-group-prepend > .input-group-text {
            padding: 0.75rem 1.25rem;
            font-size: 0.9375rem;
            line-height: 1.5;
            border-radius: 0.5rem;
        }

        .input-group-sm > .custom-select,
        .input-group-sm > .form-control:not(textarea) {
            height: calc(1.75em + 0.25rem + 2px);
        }

        .input-group-sm > .custom-select,
        .input-group-sm > .form-control,
        .input-group-sm > .input-group-append > .btn,
        .input-group-sm > .input-group-append > .input-group-text,
        .input-group-sm > .input-group-prepend > .btn,
        .input-group-sm > .input-group-prepend > .input-group-text {
            padding: 0.125rem 0.5rem;
            font-size: 0.8125rem;
            line-height: 1.75;
            border-radius: 0.25rem;
        }

        .input-group-lg > .custom-select,
        .input-group-sm > .custom-select {
            padding-right: 2rem;
        }

        .input-group.has-validation > .input-group-append:nth-last-child(n+3) > .btn,
        .input-group.has-validation > .input-group-append:nth-last-child(n+3) > .input-group-text,
        .input-group:not(.has-validation) > .input-group-append:not(:last-child) > .btn,
        .input-group:not(.has-validation) > .input-group-append:not(:last-child) > .input-group-text,
        .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
        .input-group > .input-group-append:last-child > .input-group-text:not(:last-child),
        .input-group > .input-group-prepend > .btn,
        .input-group > .input-group-prepend > .input-group-text {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group > .input-group-append > .btn,
        .input-group > .input-group-append > .input-group-text,
        .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
        .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child),
        .input-group > .input-group-prepend:not(:first-child) > .btn,
        .input-group > .input-group-prepend:not(:first-child) > .input-group-text {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .custom-control {
            position: relative;
            z-index: 1;
            display: block;
            min-height: 1.40625rem;
            padding-left: 1.5rem;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
        }

        .custom-control-inline {
            display: inline-flex;
            margin-right: 1rem;
        }

        .custom-control-input {
            position: absolute;
            left: 0;
            z-index: -1;
            width: 1rem;
            height: 1.20313rem;
            opacity: 0;
        }

        .custom-control-input:checked ~ .custom-control-label::before {
            color: #fff;
            border-color: #2c7be5;
            background-color: #2c7be5;
        }

        .custom-control-input:focus ~ .custom-control-label::before {
            box-shadow: transparent;
        }

        .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
            border-color: #2c7be5;
        }

        .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
            color: #fff;
            background-color: #cbdef9;
            border-color: #cbdef9;
        }

        .custom-control-input:disabled ~ .custom-control-label,
        .custom-control-input[disabled] ~ .custom-control-label {
            color: #95aac9;
        }

        .custom-control-input:disabled ~ .custom-control-label::before,
        .custom-control-input[disabled] ~ .custom-control-label::before {
            background-color: #fff;
        }

        .custom-control-label {
            position: relative;
            margin-bottom: 0;
            vertical-align: top;
            cursor: pointer;
        }

        .custom-control-label::before {
            position: absolute;
            top: 0.20313rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            pointer-events: none;
            content: "";
            background-color: #e3ebf6;
            border: #b1c2d9 solid 0;
        }

        .custom-control-label::after {
            position: absolute;
            top: 0.20313rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: "";
            background: 50%/50% 50% no-repeat;
        }

        .custom-checkbox .custom-control-label::before {
            border-radius: 0.375rem;
        }

        .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23FFFFFF' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
        }

        .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
            border-color: #2c7be5;
            background-color: #2c7be5;
        }

        .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23FFFFFF' d='M0 2h4'/%3e%3c/svg%3e");
        }

        .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(44, 123, 229, 0.5);
        }

        .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
            background-color: rgba(44, 123, 229, 0.5);
        }

        .custom-radio .custom-control-label::before {
            border-radius: 50%;
        }

        .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23FFFFFF'/%3e%3c/svg%3e");
        }

        .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(44, 123, 229, 0.5);
        }

        .custom-switch {
            padding-left: 3.5rem;
        }

        .custom-switch .custom-control-label::before {
            left: -3.5rem;
            width: 3rem;
            pointer-events: all;
            border-radius: 0.5625rem;
        }

        .custom-switch .custom-control-label::after {
            top: 0.20313rem;
            left: -3.5rem;
            width: 1.125rem;
            height: 1.125rem;
            background-color: #b1c2d9;
            border-radius: 0.5625rem;
            transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .custom-switch .custom-control-label::after {
                transition: none;
            }
        }

        .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
            background-color: #e3ebf6;
            transform: translateX(2rem);
        }

        .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
            background-color: rgba(44, 123, 229, 0.5);
        }

        .custom-select {
            display: inline-block;
            width: 100%;
            height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 2rem 0.5rem 0.75rem;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.5;
            color: #12263f;
            vertical-align: middle;
            background: #fff url("data:image/svg+xml,%3csvg viewBox='0 0 9 5' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M1 1L4.25 4.25L7.5 1' stroke='%2395AAC9' stroke-width='1.08333' stroke-linecap='round' stroke-linejoin='round'/%3e%3c/svg%3e") right 0.75rem center/.75em 0.75em no-repeat;
            border: 1px solid #d2ddec;
            border-radius: 0.375rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .custom-select:focus {
            border-color: #2c7be5;
            outline: 0;
            box-shadow: transparent;
        }

        .custom-select:focus::-ms-value {
            color: #12263f;
            background-color: #fff;
        }

        .custom-select[multiple],
        .custom-select[size]:not([size="1"]) {
            height: auto;
            padding-right: 0.75rem;
            background-image: none;
        }

        .custom-select:disabled {
            color: #95aac9;
            background-color: #edf2f9;
        }

        .custom-select::-ms-expand {
            display: none;
        }

        .custom-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #12263f;
        }

        .custom-select-sm {
            height: calc(1.75em + 0.25rem + 2px);
            padding-top: 0.125rem;
            padding-bottom: 0.125rem;
            padding-left: 0.5rem;
            font-size: 0.8125rem;
        }

        .custom-select-lg {
            height: calc(1.5em + 1.5rem + 2px);
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            padding-left: 1.25rem;
            font-size: 0.9375rem;
        }

        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: calc(1.5em + 1rem + 2px);
            margin-bottom: 0;
        }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(1.5em + 1rem + 2px);
            margin: 0;
            overflow: hidden;
            opacity: 0;
        }

        .custom-file-input:focus ~ .custom-file-label {
            border-color: #2c7be5;
            box-shadow: transparent;
        }

        .custom-file-input:disabled ~ .custom-file-label,
        .custom-file-input[disabled] ~ .custom-file-label {
            background-color: #fff;
        }

        .custom-file-input:lang(en) ~ .custom-file-label::after {
            content: "Browse";
        }

        .custom-file-input ~ .custom-file-label[data-browse]::after {
            content: attr(data-browse);
        }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 0.75rem;
            overflow: hidden;
            font-weight: 400;
            line-height: 1.5;
            color: #12263f;
            background-color: #fff;
            border: 1px solid #d2ddec;
            border-radius: 0.375rem;
        }

        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: calc(1.5em + 1rem);
            padding: 0.5rem 0.75rem;
            line-height: 1.5;
            color: #12263f;
            content: "Browse";
            background-color: #fff;
            border-left: inherit;
            border-radius: 0 0.375rem 0.375rem 0;
        }

        .custom-range {
            width: 100%;
            height: 1.3rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .custom-range:focus {
            outline: 0;
        }

        .custom-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #f9fbfd, transparent;
        }

        .custom-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #f9fbfd, transparent;
        }

        .custom-range:focus::-ms-thumb {
            box-shadow: 0 0 0 1px #f9fbfd, transparent;
        }

        .custom-range::-moz-focus-outer {
            border: 0;
        }

        .custom-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: #2c7be5;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .custom-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none;
            }
        }

        .custom-range::-webkit-slider-thumb:active {
            background-color: #cbdef9;
        }

        .custom-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #e3ebf6;
            border-color: transparent;
            border-radius: 1rem;
        }

        .custom-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #2c7be5;
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -moz-appearance: none;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .custom-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none;
            }
        }

        .custom-range::-moz-range-thumb:active {
            background-color: #cbdef9;
        }

        .custom-range::-moz-range-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #e3ebf6;
            border-color: transparent;
            border-radius: 1rem;
        }

        .custom-range::-ms-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: 0;
            margin-right: 0.15rem;
            margin-left: 0.15rem;
            background-color: #2c7be5;
            border: 0;
            border-radius: 1rem;
            -ms-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .custom-range::-ms-thumb {
                -ms-transition: none;
                transition: none;
            }
        }

        .custom-range::-ms-thumb:active {
            background-color: #cbdef9;
        }

        .custom-range::-ms-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: transparent;
            border-color: transparent;
            border-width: 0.5rem;
        }

        .custom-range::-ms-fill-lower {
            background-color: #e3ebf6;
            border-radius: 1rem;
        }

        .custom-range::-ms-fill-upper {
            margin-right: 15px;
            background-color: #e3ebf6;
            border-radius: 1rem;
        }

        .custom-range:disabled::-webkit-slider-thumb {
            background-color: #b1c2d9;
        }

        .custom-range:disabled::-webkit-slider-runnable-track {
            cursor: default;
        }

        .custom-range:disabled::-moz-range-thumb {
            background-color: #b1c2d9;
        }

        .custom-range:disabled::-moz-range-track {
            cursor: default;
        }

        .custom-range:disabled::-ms-thumb {
            background-color: #b1c2d9;
        }

        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .custom-control-label::before,
            .custom-file-label,
            .custom-select {
                transition: none;
            }
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            font-size: 16px;
        }

        .nav-link:focus,
        .nav-link:hover {
            text-decoration: none;
        }

        .nav-link.disabled {
            color: #95969b;
            pointer-events: none;
            cursor: default;
        }

        .nav-tabs {
            border-bottom: 1px solid #e3ebf6;
        }

        .nav-tabs .nav-link {
            margin-bottom: -1px;
            border: 1px solid transparent;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border-color: transparent transparent transparent;
        }

        .nav-tabs .nav-link.disabled {
            color: #95aac9;
            background-color: transparent;
            border-color: transparent;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #12263f;
            background-color: transparent;
            border-color: transparent transparent #2c7be5;
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav-pills .nav-link {
            border-radius: 0.375rem;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show > .nav-link {
            color: #fff;
            background-color: #2c7be5;
        }

        .nav-fill .nav-item,
        .nav-fill > .nav-link {
            flex: 1 1 auto;
            text-align: center;
        }

        .nav-justified .nav-item,
        .nav-justified > .nav-link {
            flex-basis: 0;
            flex-grow: 1;
            text-align: center;
        }

        .tab-content > .tab-pane {
            display: none;
        }

        .tab-content > .active {
            display: block;
        }

        .navbar {
            position: fixed;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 0.75rem 1rem;
            width: 100%;
        }

        .navbar .container,
        .navbar .container-fluid,
        .navbar .container-lg,
        .navbar .container-md,
        .navbar .container-sm,
        .navbar .container-xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-brand {
            display: inline-block;
            padding-top: 0;
            padding-bottom: 0;
            margin-right: 1rem;
            font-size: 1.0625rem;
            line-height: inherit;
            white-space: nowrap;
        }

        .navbar-brand:focus,
        .navbar-brand:hover {
            text-decoration: none;
        }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0;
        }

        .navbar-nav .dropdown-menu {
            position: static;
            float: none;
        }

        .navbar-text {
            display: inline-block;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .navbar-collapse {
            flex-basis: 100%;
            flex-grow: 1;
            align-items: center;
        }

        .navbar-toggler {
            padding: 0.25rem 0;
            font-size: 1.0625rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 0.375rem;
        }

        .navbar-toggler:focus,
        .navbar-toggler:hover {
            text-decoration: none;
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            content: "";
            background: 50%/100% 100% no-repeat;
        }

        .navbar-nav-scroll {
            max-height: 75vh;
            overflow-y: auto;
        }

        @media (max-width: 575.98px) {
            .navbar-expand-sm > .container,
            .navbar-expand-sm > .container-fluid,
            .navbar-expand-sm > .container-lg,
            .navbar-expand-sm > .container-md,
            .navbar-expand-sm > .container-sm,
            .navbar-expand-sm > .container-xl {
                padding-right: 0;
                padding-left: 0;
            }
        }

        @media (min-width: 576px) {
            .navbar-expand-sm {
                flex-flow: row nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-sm .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-sm > .container,
            .navbar-expand-sm > .container-fluid,
            .navbar-expand-sm > .container-lg,
            .navbar-expand-sm > .container-md,
            .navbar-expand-sm > .container-sm,
            .navbar-expand-sm > .container-xl {
                flex-wrap: nowrap;
            }

            .navbar-expand-sm .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-sm .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-sm .navbar-toggler {
                display: none;
            }
        }

        @media (max-width: 767.98px) {
            .navbar-expand-md > .container,
            .navbar-expand-md > .container-fluid,
            .navbar-expand-md > .container-lg,
            .navbar-expand-md > .container-md,
            .navbar-expand-md > .container-sm,
            .navbar-expand-md > .container-xl {
                padding-right: 0;
                padding-left: 0;
            }
        }

        @media (min-width: 768px) {
            .navbar-expand-md {
                flex-flow: row nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-md .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-md > .container,
            .navbar-expand-md > .container-fluid,
            .navbar-expand-md > .container-lg,
            .navbar-expand-md > .container-md,
            .navbar-expand-md > .container-sm,
            .navbar-expand-md > .container-xl {
                flex-wrap: nowrap;
            }

            .navbar-expand-md .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-md .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-md .navbar-toggler {
                display: none;
            }
        }

        @media (max-width: 991.98px) {
            .navbar-expand-lg > .container,
            .navbar-expand-lg > .container-fluid,
            .navbar-expand-lg > .container-lg,
            .navbar-expand-lg > .container-md,
            .navbar-expand-lg > .container-sm,
            .navbar-expand-lg > .container-xl {
                padding-right: 12px;
                padding-left: 12px;
            }
        }

        @media (min-width: 992px) {
            .navbar-expand-lg {
                flex-flow: row nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-lg > .container,
            .navbar-expand-lg > .container-fluid,
            .navbar-expand-lg > .container-lg,
            .navbar-expand-lg > .container-md,
            .navbar-expand-lg > .container-sm,
            .navbar-expand-lg > .container-xl {
                flex-wrap: nowrap;
            }

            .navbar-expand-lg .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-lg .navbar-toggler {
                display: none;
            }
        }

        @media (max-width: 1199.98px) {
            .navbar-expand-xl > .container,
            .navbar-expand-xl > .container-fluid,
            .navbar-expand-xl > .container-lg,
            .navbar-expand-xl > .container-md,
            .navbar-expand-xl > .container-sm,
            .navbar-expand-xl > .container-xl {
                padding-right: 0;
                padding-left: 0;
            }
        }

        @media (min-width: 1200px) {
            .navbar-expand-xl {
                flex-flow: row nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-xl .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }

            .navbar-expand-xl > .container,
            .navbar-expand-xl > .container-fluid,
            .navbar-expand-xl > .container-lg,
            .navbar-expand-xl > .container-md,
            .navbar-expand-xl > .container-sm,
            .navbar-expand-xl > .container-xl {
                flex-wrap: nowrap;
            }

            .navbar-expand-xl .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-xl .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-xl .navbar-toggler {
                display: none;
            }
        }

        .navbar-expand {
            flex-flow: row nowrap;
            justify-content: flex-start;
        }

        .navbar-expand > .container,
        .navbar-expand > .container-fluid,
        .navbar-expand > .container-lg,
        .navbar-expand > .container-md,
        .navbar-expand > .container-sm,
        .navbar-expand > .container-xl {
            padding-right: 0;
            padding-left: 0;
        }

        .navbar-expand .navbar-nav {
            flex-direction: row;
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-expand > .container,
        .navbar-expand > .container-fluid,
        .navbar-expand > .container-lg,
        .navbar-expand > .container-md,
        .navbar-expand > .container-sm,
        .navbar-expand > .container-xl {
            flex-wrap: nowrap;
        }

        .navbar-expand .navbar-nav-scroll {
            overflow: visible;
        }

        .navbar-expand .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }

        .navbar-expand .navbar-toggler {
            display: none;
        }

        .navbar-light .navbar-brand {
            color: #12263f;
        }

        .navbar-light .navbar-brand:focus,
        .navbar-light .navbar-brand:hover {
            color: #12263f;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #191c23;
            font-size: 18px;
            font-weight: 400;
            margin: 0 15px;
            opacity: 50%;
            padding-bottom: 0 !important;
        }

        .navbar-light .navbar-nav .nav-link:focus,
        .navbar-light .navbar-nav .nav-link:hover {
            color: #12263f;
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(18, 38, 63, 0.3);
        }

        .navbar-light .navbar-nav .active > .nav-link,
        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .show > .nav-link {
            opacity: 100%;
        }

        .navbar-light .navbar-toggler {
            color: #6e84a3;
            border-color: transparent;
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='%236E84A3' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-light .navbar-text {
            color: #6e84a3;
        }

        .navbar-light .navbar-text a {
            color: #12263f;
        }

        .navbar-light .navbar-text a:focus,
        .navbar-light .navbar-text a:hover {
            color: #12263f;
        }

        .navbar-dark .navbar-brand {
            color: #fff;
        }

        .navbar-dark .navbar-brand:focus,
        .navbar-dark .navbar-brand:hover {
            color: #fff;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #6e84a3;
        }

        .navbar-dark .navbar-nav .nav-link:focus,
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #fff;
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, 0.25);
        }

        .navbar-dark .navbar-nav .active > .nav-link,
        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .show > .nav-link {
            color: #fff;
        }

        .navbar-dark .navbar-toggler {
            color: #6e84a3;
            border-color: transparent;
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='%236E84A3' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-dark .navbar-text {
            color: #6e84a3;
        }

        .navbar-dark .navbar-text a {
            color: #fff;
        }

        .navbar-dark .navbar-text a:focus,
        .navbar-dark .navbar-text a:hover {
            color: #fff;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #edf2f9;
            border-radius: 0.5rem;
        }

        .card > hr {
            margin-right: 0;
            margin-left: 0;
        }

        .card > .list-group {
            border-top: inherit;
            border-bottom: inherit;
        }

        .card > .list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: calc(0.5rem - 1px);
            border-top-right-radius: calc(0.5rem - 1px);
        }

        .card > .list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: calc(0.5rem - 1px);
            border-bottom-left-radius: calc(0.5rem - 1px);
        }

        .card > .card-header + .list-group,
        .card > .list-group + .card-footer {
            border-top: 0;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.5rem;
        }

        .card-title {
            margin-bottom: 1rem;
        }

        .card-subtitle {
            margin-top: -0.5rem;
            margin-bottom: 0;
        }

        .card-text:last-child {
            margin-bottom: 0;
        }

        .card-link:hover {
            text-decoration: none;
        }

        .card-link + .card-link {
            margin-left: 1.5rem;
        }

        .card-header {
            padding: 1rem 1.5rem;
            margin-bottom: 0;
            background-color: transparent;
            border-bottom: 1px solid #edf2f9;
        }

        .card-header:first-child {
            border-radius: calc(0.5rem - 1px) calc(0.5rem - 1px) 0 0;
        }

        .card-footer {
            padding: 1rem 1.5rem;
            background-color: transparent;
            border-top: 1px solid #edf2f9;
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(0.5rem - 1px) calc(0.5rem - 1px);
        }

        .card-header-tabs {
            margin-right: -0.75rem;
            margin-bottom: -1rem;
            margin-left: -0.75rem;
            border-bottom: 0;
        }

        .card-header-pills {
            margin-right: -0.75rem;
            margin-left: -0.75rem;
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem;
            border-radius: calc(0.5rem - 1px);
        }

        .card-img,
        .card-img-bottom,
        .card-img-top {
            flex-shrink: 0;
            width: 100%;
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: calc(0.5rem - 1px);
            border-top-right-radius: calc(0.5rem - 1px);
        }

        .card-img,
        .card-img-bottom {
            border-bottom-right-radius: calc(0.5rem - 1px);
            border-bottom-left-radius: calc(0.5rem - 1px);
        }

        .card-deck .card {
            margin-bottom: 12px;
        }

        @media (min-width: 576px) {
            .card-deck {
                display: flex;
                flex-flow: row wrap;
                margin-right: -12px;
                margin-left: -12px;
            }

            .card-deck .card {
                flex: 1 0 0%;
                margin-right: 12px;
                margin-bottom: 0;
                margin-left: 12px;
            }
        }

        .card-group > .card {
            margin-bottom: 12px;
        }

        @media (min-width: 576px) {
            .card-group {
                display: flex;
                flex-flow: row wrap;
            }

            .card-group > .card {
                flex: 1 0 0%;
                margin-bottom: 0;
            }

            .card-group > .card + .card {
                margin-left: 0;
                border-left: 0;
            }

            .card-group > .card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }

            .card-group > .card:not(:last-child) .card-header,
            .card-group > .card:not(:last-child) .card-img-top {
                border-top-right-radius: 0;
            }

            .card-group > .card:not(:last-child) .card-footer,
            .card-group > .card:not(:last-child) .card-img-bottom {
                border-bottom-right-radius: 0;
            }

            .card-group > .card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }

            .card-group > .card:not(:first-child) .card-header,
            .card-group > .card:not(:first-child) .card-img-top {
                border-top-left-radius: 0;
            }

            .card-group > .card:not(:first-child) .card-footer,
            .card-group > .card:not(:first-child) .card-img-bottom {
                border-bottom-left-radius: 0;
            }
        }

        .card-columns .card {
            margin-bottom: 1rem;
        }

        @media (min-width: 576px) {
            .card-columns {
                -moz-column-count: 3;
                column-count: 3;
                -moz-column-gap: 1.25rem;
                column-gap: 1.25rem;
                orphans: 1;
                widows: 1;
            }

            .card-columns .card {
                display: inline-block;
                width: 100%;
            }
        }

        .accordion {
            overflow-anchor: none;
        }

        .accordion > .card {
            overflow: hidden;
        }

        .accordion > .card:not(:last-of-type) {
            border-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .accordion > .card:not(:first-of-type) {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .accordion > .card > .card-header {
            border-radius: 0;
            margin-bottom: -1px;
        }

        .breadcrumb {
            display: flex;
            flex-wrap: wrap;
            padding: 0.75rem 0;
            margin-bottom: 0;
            list-style: none;
            background-color: transparent;
            border-radius: 0.375rem;
        }

        .breadcrumb-item + .breadcrumb-item {
            padding-left: 0.5rem;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            float: left;
            padding-right: 0.5rem;
            color: #d2ddec;
            content: "";
        }

        .breadcrumb-item + .breadcrumb-item:hover::before {
            text-decoration: underline;
        }

        .breadcrumb-item + .breadcrumb-item:hover::before {
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #95aac9;
        }

        .pagination {
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: 0.375rem;
        }

        .page,
        .page-link {
            position: relative;
            display: block;
            padding: 0.5rem 0.75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #12263f;
            background-color: #fff;
            border: 1px solid #e3ebf6;
        }

        .page-link:hover,
        .page:hover {
            z-index: 2;
            color: #12263f;
            text-decoration: none;
            background-color: #f9fbfd;
            border-color: #e3ebf6;
        }

        .page-link:focus,
        .page:focus {
            z-index: 3;
            outline: 0;
            box-shadow: none;
        }

        .page-item:first-child .page,
        .page-item:first-child .page-link {
            margin-left: 0;
            border-top-left-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
        }

        .page-item:last-child .page,
        .page-item:last-child .page-link {
            border-top-right-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
        }

        .page-item.active .page,
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #2c7be5;
            border-color: #2c7be5;
        }

        .page-item.disabled .page,
        .page-item.disabled .page-link {
            color: #95aac9;
            pointer-events: none;
            cursor: auto;
            background-color: #fff;
            border-color: #e3ebf6;
        }

        .pagination-lg .page,
        .pagination-lg .page-link {
            padding: 0.75rem 1.25rem;
            font-size: 1.0625rem;
            line-height: 1.5;
        }

        .pagination-lg .page-item:first-child .page,
        .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }

        .pagination-lg .page-item:last-child .page,
        .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }

        .pagination-sm .page,
        .pagination-sm .page-link {
            padding: 0.125rem 0.5rem;
            font-size: 0.8125rem;
            line-height: 1.75;
        }

        .pagination-sm .page-item:first-child .page,
        .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .pagination-sm .page-item:last-child .page,
        .pagination-sm .page-item:last-child .page-link {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        .badge {
            display: inline-block;
            padding: 0.33em 0.5em;
            font-size: 76%;
            font-weight: 400;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.375rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .badge {
                transition: none;
            }
        }

        a.badge:focus,
        a.badge:hover {
            text-decoration: none;
        }

        .badge:empty {
            display: none;
        }

        .btn .badge {
            position: relative;
            top: -1px;
        }

        .badge-pill {
            padding-right: 0.6em;
            padding-left: 0.6em;
            border-radius: 10rem;
        }

        .badge-primary {
            color: #fff;
            background-color: #2c7be5;
        }

        a.badge-primary:focus,
        a.badge-primary:hover {
            color: #fff;
            background-color: #1862c6;
        }

        a.badge-primary.focus,
        a.badge-primary:focus {
            outline: 0;
            box-shadow: 0 0 0 0.15rem rgba(44, 123, 229, 0.5);
        }

        .badge-secondary {
            color: #fff;
            background-color: #6e84a3;
        }

        a.badge-secondary:focus,
        a.badge-secondary:hover {
            color: #fff;
            background-color: #566b88;
        }

        a.badge-secondary.focus,
        a.badge-secondary:focus {
            outline: 0;
            box-shadow: 0 0 0 0.15rem rgba(110, 132, 163, 0.5);
        }

        .badge-success {
            color: #fff;
            background-color: #00d97e;
        }

        a.badge-success:focus,
        a.badge-success:hover {
            color: #fff;
            background-color: #00a660;
        }

        a.badge-success.focus,
        a.badge-success:focus {
            outline: 0;
            box-shadow: 0 0 0 0.15rem rgba(0, 217, 126, 0.5);
        }

        .badge-info {
            color: #fff;
            background-color: #39afd1;
        }

        a.badge-info:focus,
        a.badge-info:hover {
            color: #fff;
            background-color: #2991ae;
        }

        a.badge-info.focus,
        a.badge-info:focus {
            outline: 0;
            box-shadow: 0 0 0 0.15rem rgba(57, 175, 209, 0.5);
        }

        .badge-warning {
            color: #283e59;
            background-color: #f6c343;
        }

        a.badge-warning:focus,
        a.badge-warning:hover {
            color: #283e59;
            background-color: #f4b312;
        }

        a.badge-warning.focus,
        a.badge-warning:focus {
            outline: 0;
            box-shadow: 0 0 0 0.15rem rgba(246, 195, 67, 0.5);
        }

        .badge-danger {
            color: #fff;
            background-color: #e63757;
        }

        a.badge-danger:focus,
        a.badge-danger:hover {
            color: #fff;
            background-color: #d01a3b;
        }

        a.badge-danger.focus,
        a.badge-danger:focus {
            outline: 0;
            box-shadow: 0 0 0 0.15rem rgba(230, 55, 87, 0.5);
        }

        .badge-light {
            color: #283e59;
            background-color: #edf2f9;
        }

        a.badge-light:focus,
        a.badge-light:hover {
            color: #283e59;
            background-color: #c7d6ec;
        }

        a.badge-light.focus,
        a.badge-light:focus {
            outline: 0;
            box-shadow: 0 0 0 0.15rem rgba(237, 242, 249, 0.5);
        }

        .badge-dark {
            color: #fff;
            background-color: #12263f;
        }

        a.badge-dark:focus,
        a.badge-dark:hover {
            color: #fff;
            background-color: #070e17;
        }

        a.badge-dark.focus,
        a.badge-dark:focus {
            outline: 0;
            box-shadow: 0 0 0 0.15rem rgba(18, 38, 63, 0.5);
        }

        .badge-white {
            color: #283e59;
            background-color: #fff;
        }

        a.badge-white:focus,
        a.badge-white:hover {
            color: #283e59;
            background-color: #e6e6e6;
        }

        a.badge-white.focus,
        a.badge-white:focus {
            outline: 0;
            box-shadow: 0 0 0 0.15rem rgba(255, 255, 255, 0.5);
        }

        .jumbotron {
            background: #f9f9f9;
            border: 0.5px solid rgba(97, 110, 124, 0.25);
            box-sizing: border-box;
            border-radius: 8px;
        }

        @media (min-width: 576px) {
            .jumbotron {
                padding: 4rem 2rem;
            }

            .jumbotron-fluid {
                padding-right: 0;
                padding-left: 0;
                border-radius: 0;
            }

            .alert {
                position: relative;
                padding: 0.75rem 1.25rem;
                margin-bottom: 1.5rem;
                border: 1px solid transparent;
                border-radius: 0.375rem;
            }

            .alert-heading {
                color: inherit;
            }

            .alert-link {
                font-weight: 400;
            }

            .alert-dismissible {
                padding-right: 3.90625rem;
            }

            .alert-dismissible .close {
                position: absolute;
                top: 0;
                right: 0;
                z-index: 2;
                padding: 0.75rem 1.25rem;
                color: inherit;
            }

            /* .alert-primary {
    color: #205295;
    background-color: #2c7be5;
    border-color: #2c7be5;
  }
  .alert-primary hr {
    border-top-color: #1b6edc;
  }
  .alert-primary .alert-link {
    color: #173b6b;
  } */
            .alert-secondary {
                color: #425773;
                background-color: #6e84a3;
                border-color: #6e84a3;
            }

            .alert-secondary hr {
                border-top-color: #607797;
            }

            .alert-secondary .alert-link {
                color: #2f3e53;
            }

            .alert-success {
                color: #098360;
                background-color: #00d97e;
                border-color: #00d97e;
            }

            .alert-success hr {
                border-top-color: #00c06f;
            }

            .alert-success .alert-link {
                color: #06533d;
            }

            .alert-info {
                color: #266d8b;
                background-color: #39afd1;
                border-color: #39afd1;
            }

            .alert-info hr {
                border-top-color: #2da2c3;
            }

            .alert-info .alert-link {
                color: #1b4e63;
            }

            .alert-warning {
                color: rgba(60, 66, 87, 0.85);
                background-color: rgba(255, 175, 11, 0.03);
                border-color: #ffaf0b;
            }

            .alert-warning hr {
                border-top-color: #f5bb2b;
            }

            .alert-warning .alert-link {
                color: #665a31;
            }

            .alert-danger {
                color: rgba(60, 66, 87, 0.85);
                background-color: rgba(198, 16, 16, 0.03);
                font-size: 16px;
                width: 733px;
                border-color: #c61010;
            }

            .alert-danger hr {
                border-top-color: #c61010;
            }

            .alert-danger .alert-link {
                color: #e6e6e6;
            }

            .alert-danger .alert-link,
            .alert-danger .close {
                color: #fff;
            }

            .alert-light {
                color: #8490a0;
                background-color: #edf2f9;
                border-color: #edf2f9;
            }

            .alert-light hr {
                border-top-color: #dae4f3;
            }

            .alert-light .alert-link {
                color: #697688;
            }

            .alert-dark {
                color: #12263f;
                background-color: #12263f;
                border-color: #12263f;
            }

            .alert-dark hr {
                border-top-color: #0c1a2b;
            }

            .alert-dark .alert-link {
                color: #070e17;
            }

            .alert-white {
                color: #8d97a3;
                background-color: #fff;
                border-color: #fff;
            }

            .alert-white hr {
                border-top-color: #f2f2f2;
            }

            .alert-white .alert-link {
                color: #717d8c;
            }
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0;
            }
            to {
                background-position: 0 0;
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0;
            }
            to {
                background-position: 0 0;
            }
        }

        .progress {
            display: flex;
            height: 1rem;
            overflow: hidden;
            line-height: 0;
            font-size: 0.70313rem;
            background-color: #edf2f9;
            border-radius: 200px;
        }

        .progress-bar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background-color: #2c7be5;
            transition: width 0.6s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar {
                transition: none;
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem;
        }

        .progress-bar-animated {
            -webkit-animation: 1s linear infinite progress-bar-stripes;
            animation: 1s linear infinite progress-bar-stripes;
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none;
            }
        }

        .media {
            display: flex;
            align-items: flex-start;
        }

        .media-body {
            flex: 1;
        }

        .list-group {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: 0.375rem;
        }

        .list-group-item-action {
            width: 100%;
            color: #12263f;
            text-align: inherit;
        }

        .list-group-item-action:focus,
        .list-group-item-action:hover {
            z-index: 1;
            color: #12263f;
            text-decoration: none;
            background-color: #f9fbfd;
        }

        .list-group-item-action:active {
            color: #12263f;
            background-color: #edf2f9;
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 1rem 1.25rem;
            background-color: transparent;
            border: 1px solid #edf2f9;
        }

        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit;
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            color: #95aac9;
            pointer-events: none;
            background-color: transparent;
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #2c7be5;
            border-color: #2c7be5;
        }

        .list-group-item + .list-group-item {
            border-top-width: 0;
        }

        .list-group-item + .list-group-item.active {
            margin-top: -1px;
            border-top-width: 1px;
        }

        .list-group-horizontal {
            flex-direction: row;
        }

        .list-group-horizontal > .list-group-item:first-child {
            border-bottom-left-radius: 0.375rem;
            border-top-right-radius: 0;
        }

        .list-group-horizontal > .list-group-item:last-child {
            border-top-right-radius: 0.375rem;
            border-bottom-left-radius: 0;
        }

        .list-group-horizontal > .list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal > .list-group-item + .list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }

        .list-group-horizontal > .list-group-item + .list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }

        @media (min-width: 576px) {
            .list-group-horizontal-sm {
                flex-direction: row;
            }

            .list-group-horizontal-sm > .list-group-item:first-child {
                border-bottom-left-radius: 0.375rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-sm > .list-group-item:last-child {
                border-top-right-radius: 0.375rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-sm > .list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-sm > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }

        @media (min-width: 768px) {
            .list-group-horizontal-md {
                flex-direction: row;
            }

            .list-group-horizontal-md > .list-group-item:first-child {
                border-bottom-left-radius: 0.375rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-md > .list-group-item:last-child {
                border-top-right-radius: 0.375rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-md > .list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-md > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-md > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }

        @media (min-width: 992px) {
            .list-group-horizontal-lg {
                flex-direction: row;
            }

            .list-group-horizontal-lg > .list-group-item:first-child {
                border-bottom-left-radius: 0.375rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-lg > .list-group-item:last-child {
                border-top-right-radius: 0.375rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-lg > .list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-lg > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }

        @media (min-width: 1200px) {
            .list-group-horizontal-xl {
                flex-direction: row;
            }

            .list-group-horizontal-xl > .list-group-item:first-child {
                border-bottom-left-radius: 0.375rem;
                border-top-right-radius: 0;
            }

            .list-group-horizontal-xl > .list-group-item:last-child {
                border-top-right-radius: 0.375rem;
                border-bottom-left-radius: 0;
            }

            .list-group-horizontal-xl > .list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-xl > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }

            .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }

        .list-group-flush {
            border-radius: 0;
        }

        .list-group-flush > .list-group-item {
            border-width: 0 0 1px;
        }

        .list-group-flush > .list-group-item:last-child {
            border-bottom-width: 0;
        }

        .list-group-item-primary {
            color: #205295;
            background-color: #c4daf8;
        }

        .list-group-item-primary.list-group-item-action:focus,
        .list-group-item-primary.list-group-item-action:hover {
            color: #205295;
            background-color: #adccf5;
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #205295;
            border-color: #205295;
        }

        .list-group-item-secondary {
            color: #425773;
            background-color: #d6dde5;
        }

        .list-group-item-secondary.list-group-item-action:focus,
        .list-group-item-secondary.list-group-item-action:hover {
            color: #425773;
            background-color: #c6d0db;
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #425773;
            border-color: #425773;
        }

        .list-group-item-success {
            color: #098360;
            background-color: #b8f4db;
        }

        .list-group-item-success.list-group-item-action:focus,
        .list-group-item-success.list-group-item-action:hover {
            color: #098360;
            background-color: #a2f1d0;
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #098360;
            border-color: #098360;
        }

        .list-group-item-info {
            color: #266d8b;
            background-color: #c8e9f2;
        }

        .list-group-item-info.list-group-item-action:focus,
        .list-group-item-info.list-group-item-action:hover {
            color: #266d8b;
            background-color: #b3e1ed;
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #266d8b;
            border-color: #266d8b;
        }

        .list-group-item-warning {
            color: #897841;
            background-color: #fceeca;
        }

        .list-group-item-warning.list-group-item-action:focus,
        .list-group-item-warning.list-group-item-action:hover {
            color: #897841;
            background-color: #fbe6b2;
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #897841;
            border-color: #897841;
        }

        .list-group-item-danger {
            color: #802f4b;
            background-color: #f8c7d0;
        }

        .list-group-item-danger.list-group-item-action:focus,
        .list-group-item-danger.list-group-item-action:hover {
            color: #802f4b;
            background-color: #f5b0bd;
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #802f4b;
            border-color: #802f4b;
        }

        .list-group-item-light {
            color: #8490a0;
            background-color: #fafbfd;
        }

        .list-group-item-light.list-group-item-action:focus,
        .list-group-item-light.list-group-item-action:hover {
            color: #8490a0;
            background-color: #e8ecf6;
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #8490a0;
            border-color: #8490a0;
        }

        .list-group-item-dark {
            color: #12263f;
            background-color: #bdc2c9;
        }

        .list-group-item-dark.list-group-item-action:focus,
        .list-group-item-dark.list-group-item-action:hover {
            color: #12263f;
            background-color: #afb5be;
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #12263f;
            border-color: #12263f;
        }

        .list-group-item-white {
            color: #8d97a3;
            background-color: #fff;
        }

        .list-group-item-white.list-group-item-action:focus,
        .list-group-item-white.list-group-item-action:hover {
            color: #8d97a3;
            background-color: #f2f2f2;
        }

        .list-group-item-white.list-group-item-action.active {
            color: #fff;
            background-color: #8d97a3;
            border-color: #8d97a3;
        }

        .close:not(:disabled):not(.disabled):focus,
        .close:not(:disabled):not(.disabled):hover {
            opacity: 0.75;
        }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0;
        }

        a.close.disabled {
            pointer-events: none;
        }

        .toast {
            flex-basis: 300px;
            max-width: 300px;
            font-size: 0.9375rem;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e3ebf6;
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.1);
            opacity: 0;
            border-radius: 0.375rem;
        }

        .toast:not(:last-child) {
            margin-bottom: 1rem;
        }

        .toast.showing {
            opacity: 1;
        }

        .toast.show {
            display: block;
            opacity: 1;
        }

        .toast.hide {
            display: none;
        }

        .toast-header {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: #12263f;
            background-color: #fff;
            background-clip: padding-box;
            border-bottom: 1px solid #e3ebf6;
            border-top-left-radius: calc(0.375rem - 1px);
            border-top-right-radius: calc(0.375rem - 1px);
        }

        .toast-body {
            padding: 1rem;
        }

        .modal-open {
            overflow: hidden;
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0;
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 0.5rem;
            pointer-events: none;
        }

        .modal.fade .modal-dialog {
            transition: transform 0.3s ease-out;
            transform: translate(0, -50px);
        }

        @media (prefers-reduced-motion: reduce) {
            .modal.fade .modal-dialog {
                transition: none;
            }
        }

        .modal.show .modal-dialog {
            transform: none;
        }

        .modal.modal-static .modal-dialog {
            transform: scale(1.02);
        }

        .modal-dialog-scrollable {
            display: flex;
            max-height: calc(100% - 1rem);
        }

        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 1rem);
            overflow: hidden;
        }

        .modal-dialog-scrollable .modal-footer,
        .modal-dialog-scrollable .modal-header {
            flex-shrink: 0;
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto;
        }

        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - 1rem);
        }

        .modal-dialog-centered::before {
            display: block;
            height: calc(100vh - 1rem);
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            content: "";
        }

        .modal-dialog-centered.modal-dialog-scrollable {
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .modal-dialog-centered.modal-dialog-scrollable .modal-content {
            max-height: none;
        }

        .modal-dialog-centered.modal-dialog-scrollable::before {
            content: none;
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid transparent;
            border-radius: 0.5rem;
            outline: 0;
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #12263f;
        }

        .modal-backdrop.fade {
            opacity: 0;
        }

        .modal-backdrop.show {
            opacity: 0.5;
        }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #e3ebf6;
            border-top-left-radius: calc(0.5rem - 1px);
            border-top-right-radius: calc(0.5rem - 1px);
        }

        .modal-header .close {
            padding: 1rem 1.5rem;
            margin: -1rem -1rem -1rem auto;
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5;
        }

        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 1.5rem;
        }

        .modal-footer {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            padding: 1.25rem;
            border-top: 1px solid #e3ebf6;
            border-bottom-right-radius: calc(0.5rem - 1px);
            border-bottom-left-radius: calc(0.5rem - 1px);
        }

        .modal-footer > * {
            margin: 0.25rem;
        }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 600px;
                margin: 1.75rem auto;
            }

            .modal-dialog-scrollable {
                max-height: calc(100% - 3.5rem);
            }

            .modal-dialog-scrollable .modal-content {
                max-height: calc(100vh - 3.5rem);
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem);
            }

            .modal-dialog-centered::before {
                height: calc(100vh - 3.5rem);
                height: -webkit-min-content;
                height: -moz-min-content;
                height: min-content;
            }

            .modal-sm {
                max-width: 300px;
            }
        }

        @media (min-width: 992px) {
            .modal-lg,
            .modal-xl {
                max-width: 800px;
            }
        }

        @media (min-width: 1200px) {
            .modal-xl {
                max-width: 1140px;
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            margin: 0;
            font-family: "Calibre", sans-serif;
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.8125rem;
            word-wrap: break-word;
            opacity: 0;
        }

        .tooltip.show {
            opacity: 1;
        }

        .tooltip .arrow {
            position: absolute;
            display: block;
            width: 0.8rem;
            height: 0.4rem;
        }

        .tooltip .arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-tooltip-auto[x-placement^="top"],
        .bs-tooltip-top {
            padding: 0.4rem 0;
        }

        .bs-tooltip-auto[x-placement^="top"] .arrow,
        .bs-tooltip-top .arrow {
            bottom: 0;
        }

        .bs-tooltip-auto[x-placement^="top"] .arrow::before,
        .bs-tooltip-top .arrow::before {
            top: 0;
            border-width: 0.4rem 0.4rem 0;
            border-top-color: #e3ebf6;
        }

        .bs-tooltip-auto[x-placement^="right"],
        .bs-tooltip-right {
            padding: 0 0.4rem;
        }

        .bs-tooltip-auto[x-placement^="right"] .arrow,
        .bs-tooltip-right .arrow {
            left: 0;
            width: 0.4rem;
            height: 0.8rem;
        }

        .bs-tooltip-auto[x-placement^="right"] .arrow::before,
        .bs-tooltip-right .arrow::before {
            right: 0;
            border-width: 0.4rem 0.4rem 0.4rem 0;
            border-right-color: #e3ebf6;
        }

        .bs-tooltip-auto[x-placement^="bottom"],
        .bs-tooltip-bottom {
            padding: 0.4rem 0;
        }

        .bs-tooltip-auto[x-placement^="bottom"] .arrow,
        .bs-tooltip-bottom .arrow {
            top: 0;
        }

        .bs-tooltip-auto[x-placement^="bottom"] .arrow::before,
        .bs-tooltip-bottom .arrow::before {
            bottom: 0;
            border-width: 0 0.4rem 0.4rem;
            border-bottom-color: #e3ebf6;
        }

        .bs-tooltip-auto[x-placement^="left"],
        .bs-tooltip-left {
            padding: 0 0.4rem;
        }

        .bs-tooltip-auto[x-placement^="left"] .arrow,
        .bs-tooltip-left .arrow {
            right: 0;
            width: 0.4rem;
            height: 0.8rem;
        }

        .bs-tooltip-auto[x-placement^="left"] .arrow::before,
        .bs-tooltip-left .arrow::before {
            left: 0;
            border-width: 0.4rem 0 0.4rem 0.4rem;
            border-left-color: #e3ebf6;
        }

        .tooltip-inner {
            max-width: 200px;
            padding: 0.25rem 0.5rem;
            color: #12263f;
            text-align: center;
            background-color: #e3ebf6;
            border-radius: 0.375rem;
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1060;
            display: block;
            max-width: 10rem;
            font-family: "Calibre", sans-serif;
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.8125rem;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(18, 38, 63, 0.2);
            border-radius: 0.5rem;
        }

        .popover .arrow {
            position: absolute;
            display: block;
            width: 1rem;
            height: 0.5rem;
            margin: 0 0.5rem;
        }

        .popover .arrow::after,
        .popover .arrow::before {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-popover-auto[x-placement^="top"],
        .bs-popover-top {
            margin-bottom: 0.5rem;
        }

        .bs-popover-auto[x-placement^="top"] > .arrow,
        .bs-popover-top > .arrow {
            bottom: calc(-0.5rem - 1px);
        }

        .bs-popover-auto[x-placement^="top"] > .arrow::before,
        .bs-popover-top > .arrow::before {
            bottom: 0;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: rgba(18, 38, 63, 0.25);
        }

        .bs-popover-auto[x-placement^="top"] > .arrow::after,
        .bs-popover-top > .arrow::after {
            bottom: 1px;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: #fff;
        }

        .bs-popover-auto[x-placement^="right"],
        .bs-popover-right {
            margin-left: 0.5rem;
        }

        .bs-popover-auto[x-placement^="right"] > .arrow,
        .bs-popover-right > .arrow {
            left: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
            margin: 0.5rem 0;
        }

        .bs-popover-auto[x-placement^="right"] > .arrow::before,
        .bs-popover-right > .arrow::before {
            left: 0;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: rgba(18, 38, 63, 0.25);
        }

        .bs-popover-auto[x-placement^="right"] > .arrow::after,
        .bs-popover-right > .arrow::after {
            left: 1px;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: #fff;
        }

        .bs-popover-auto[x-placement^="bottom"],
        .bs-popover-bottom {
            margin-top: 0.5rem;
        }

        .bs-popover-auto[x-placement^="bottom"] > .arrow,
        .bs-popover-bottom > .arrow {
            top: calc(-0.5rem - 1px);
        }

        .bs-popover-auto[x-placement^="bottom"] > .arrow::before,
        .bs-popover-bottom > .arrow::before {
            top: 0;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: rgba(18, 38, 63, 0.25);
        }

        .bs-popover-auto[x-placement^="bottom"] > .arrow::after,
        .bs-popover-bottom > .arrow::after {
            top: 1px;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: #fff;
        }

        .bs-popover-auto[x-placement^="bottom"] .popover-header::before,
        .bs-popover-bottom .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 1rem;
            margin-left: -0.5rem;
            content: "";
            border-bottom: 1px solid #fff;
        }

        .bs-popover-auto[x-placement^="left"],
        .bs-popover-left {
            margin-right: 0.5rem;
        }

        .bs-popover-auto[x-placement^="left"] > .arrow,
        .bs-popover-left > .arrow {
            right: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
            margin: 0.5rem 0;
        }

        .bs-popover-auto[x-placement^="left"] > .arrow::before,
        .bs-popover-left > .arrow::before {
            right: 0;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: rgba(18, 38, 63, 0.25);
        }

        .bs-popover-auto[x-placement^="left"] > .arrow::after,
        .bs-popover-left > .arrow::after {
            right: 1px;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: #fff;
        }

        .popover-header {
            padding: 0 0;
            margin-bottom: 0;
            font-size: 0.9375rem;
            background-color: #fff;
            border-bottom: 1px solid #f2f2f2;
            border-top-left-radius: calc(0.5rem - 1px);
            border-top-right-radius: calc(0.5rem - 1px);
        }

        .popover-header:empty {
            display: none;
        }

        .popover-body {
            padding: 0 0;
            color: #95aac9;
        }

        .carousel {
            position: relative;
        }

        .carousel.pointer-event {
            touch-action: pan-y;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-inner::after {
            display: block;
            clear: both;
            content: "";
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: transform 0.6s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-item {
                transition: none;
            }
        }

        .carousel-item-next,
        .carousel-item-prev,
        .carousel-item.active {
            display: block;
        }

        .active.carousel-item-right,
        .carousel-item-next:not(.carousel-item-left) {
            transform: translateX(100%);
        }

        .active.carousel-item-left,
        .carousel-item-prev:not(.carousel-item-right) {
            transform: translateX(-100%);
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            transition-property: opacity;
            transform: none;
        }

        .carousel-fade .carousel-item-next.carousel-item-left,
        .carousel-fade .carousel-item-prev.carousel-item-right,
        .carousel-fade .carousel-item.active {
            z-index: 1;
            opacity: 1;
        }

        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            z-index: 0;
            opacity: 0;
            transition: opacity 0s 0.6s;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-fade .active.carousel-item-left,
            .carousel-fade .active.carousel-item-right {
                transition: none;
            }
        }

        .carousel-control-next,
        .carousel-control-prev {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15%;
            color: #fff;
            text-align: center;
            opacity: 0.5;
            transition: opacity 0.15s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-control-next,
            .carousel-control-prev {
                transition: none;
            }
        }

        .carousel-control-next:focus,
        .carousel-control-next:hover,
        .carousel-control-prev:focus,
        .carousel-control-prev:hover {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: 0.9;
        }

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: 50%/100% 100% no-repeat;
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFFFFF' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFFFFF' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 15;
            display: flex;
            justify-content: center;
            padding-left: 0;
            margin-right: 15%;
            margin-left: 15%;
            list-style: none;
        }

        .carousel-indicators li {
            box-sizing: content-box;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: 0.5;
            transition: opacity 0.6s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-indicators li {
                transition: none;
            }
        }

        .carousel-indicators .active {
            opacity: 1;
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
        }

        @-webkit-keyframes spinner-border {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes spinner-border {
            to {
                transform: rotate(360deg);
            }
        }

        .spinner-border {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            border: 0.25em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: 0.75s linear infinite spinner-border;
            animation: 0.75s linear infinite spinner-border;
        }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: 0.2em;
        }

        @-webkit-keyframes spinner-grow {
            0% {
                transform: scale(0);
            }
            50% {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes spinner-grow {
            0% {
                transform: scale(0);
            }
            50% {
                opacity: 1;
                transform: none;
            }
        }

        .spinner-grow {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            background-color: currentColor;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: 0.75s linear infinite spinner-grow;
            animation: 0.75s linear infinite spinner-grow;
        }

        .spinner-grow-sm {
            width: 1rem;
            height: 1rem;
        }

        @media (prefers-reduced-motion: reduce) {
            .spinner-border,
            .spinner-grow {
                -webkit-animation-duration: 1.5s;
                animation-duration: 1.5s;
            }
        }

        .align-baseline {
            vertical-align: baseline !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }

        .align-text-bottom {
            vertical-align: text-bottom !important;
        }

        .align-text-top {
            vertical-align: text-top !important;
        }

        .bg-primary {
            background-color: #2c7be5 !important;
        }

        a.bg-primary:focus,
        a.bg-primary:hover,
        button.bg-primary:focus,
        button.bg-primary:hover {
            background-color: #1862c6 !important;
        }

        .bg-secondary {
            background-color: #6e84a3 !important;
        }

        a.bg-secondary:focus,
        a.bg-secondary:hover,
        button.bg-secondary:focus,
        button.bg-secondary:hover {
            background-color: #566b88 !important;
        }

        .bg-success {
            background-color: #00d97e !important;
        }

        a.bg-success:focus,
        a.bg-success:hover,
        button.bg-success:focus,
        button.bg-success:hover {
            background-color: #00a660 !important;
        }

        .bg-info {
            background-color: #39afd1 !important;
        }

        a.bg-info:focus,
        a.bg-info:hover,
        button.bg-info:focus,
        button.bg-info:hover {
            background-color: #2991ae !important;
        }

        .bg-warning {
            background-color: #f6c343 !important;
        }

        a.bg-warning:focus,
        a.bg-warning:hover,
        button.bg-warning:focus,
        button.bg-warning:hover {
            background-color: #f4b312 !important;
        }

        .bg-danger {
            background-color: #e63757 !important;
        }

        a.bg-danger:focus,
        a.bg-danger:hover,
        button.bg-danger:focus,
        button.bg-danger:hover {
            background-color: #d01a3b !important;
        }

        .bg-light {
            background-color: #edf2f9 !important;
        }

        a.bg-light:focus,
        a.bg-light:hover,
        button.bg-light:focus,
        button.bg-light:hover {
            background-color: #c7d6ec !important;
        }

        .bg-dark {
            background-color: #12263f !important;
        }

        a.bg-dark:focus,
        a.bg-dark:hover,
        button.bg-dark:focus,
        button.bg-dark:hover {
            background-color: #070e17 !important;
        }

        .bg-white {
            background-color: #fff !important;
        }

        a.bg-white:focus,
        a.bg-white:hover,
        button.bg-white:focus,
        button.bg-white:hover {
            background-color: #e6e6e6 !important;
        }

        .bg-white {
            background-color: #fff !important;
        }

        .bg-transparent {
            background-color: transparent !important;
        }

        .border {
            border: 1px solid #e3ebf6 !important;
        }

        .border-top {
            border-top: 1px solid #e3ebf6 !important;
        }

        .border-right {
            border-right: 1px solid #e3ebf6 !important;
        }

        .border-bottom {
            border-bottom: 1px solid #e3ebf6 !important;
        }

        .border-left {
            border-left: 1px solid #e3ebf6 !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .border-top-0 {
            border-top: 0 !important;
        }

        .border-right-0 {
            border-right: 0 !important;
        }

        .border-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-left-0 {
            border-left: 0 !important;
        }

        .border-primary {
            border-color: #2c7be5 !important;
        }

        .border-secondary {
            border-color: #6e84a3 !important;
        }

        .border-success {
            border-color: #00d97e !important;
        }

        .border-info {
            border-color: #39afd1 !important;
        }

        .border-warning {
            border-color: #f6c343 !important;
        }

        .border-danger {
            border-color: #e63757 !important;
        }

        .border-light {
            border-color: #edf2f9 !important;
        }

        .border-dark {
            border-color: #12263f !important;
        }

        .border-white {
            border-color: #fff !important;
        }

        .border-white {
            border-color: #fff !important;
        }

        .rounded-sm {
            border-radius: 0.25rem !important;
        }

        .rounded {
            border-radius: 0.375rem !important;
        }

        .rounded-top {
            border-top-left-radius: 0.375rem !important;
            border-top-right-radius: 0.375rem !important;
        }

        .rounded-right {
            border-top-right-radius: 0.375rem !important;
            border-bottom-right-radius: 0.375rem !important;
        }

        .rounded-bottom {
            border-bottom-right-radius: 0.375rem !important;
            border-bottom-left-radius: 0.375rem !important;
        }

        .rounded-left {
            border-top-left-radius: 0.375rem !important;
            border-bottom-left-radius: 0.375rem !important;
        }

        .rounded-lg {
            border-radius: 0.5rem !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }

        .rounded-0 {
            border-radius: 0 !important;
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        .d-none {
            display: none !important;
        }

        .d-inline {
            display: inline !important;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .d-block {
            display: block !important;
        }

        .d-table {
            display: table !important;
        }

        .d-table-row {
            display: table-row !important;
        }

        .d-table-cell {
            display: table-cell !important;
        }

        .d-flex {
            display: flex !important;
        }

        .d-inline-flex {
            display: inline-flex !important;
        }

        @media (min-width: 576px) {
            .d-sm-none {
                display: none !important;
            }

            .d-sm-inline {
                display: inline !important;
            }

            .d-sm-inline-block {
                display: inline-block !important;
            }

            .d-sm-block {
                display: block !important;
            }

            .d-sm-table {
                display: table !important;
            }

            .d-sm-table-row {
                display: table-row !important;
            }

            .d-sm-table-cell {
                display: table-cell !important;
            }

            .d-sm-flex {
                display: flex !important;
            }

            .d-sm-inline-flex {
                display: inline-flex !important;
            }
        }

        @media (min-width: 768px) {
            .d-md-none {
                display: none !important;
            }

            .d-md-inline {
                display: inline !important;
            }

            .d-md-inline-block {
                display: inline-block !important;
            }

            .d-md-block {
                display: block !important;
            }

            .d-md-table {
                display: table !important;
            }

            .d-md-table-row {
                display: table-row !important;
            }

            .d-md-table-cell {
                display: table-cell !important;
            }

            .d-md-flex {
                display: flex !important;
            }

            .d-md-inline-flex {
                display: inline-flex !important;
            }
        }

        @media (min-width: 992px) {
            .d-lg-none {
                display: none !important;
            }

            .d-lg-inline {
                display: inline !important;
            }

            .d-lg-inline-block {
                display: inline-block !important;
            }

            .d-lg-block {
                display: block !important;
            }

            .d-lg-table {
                display: table !important;
            }

            .d-lg-table-row {
                display: table-row !important;
            }

            .d-lg-table-cell {
                display: table-cell !important;
            }

            .d-lg-flex {
                display: flex !important;
            }

            .d-lg-inline-flex {
                display: inline-flex !important;
            }
        }

        @media (min-width: 1200px) {
            .d-xl-none {
                display: none !important;
            }

            .d-xl-inline {
                display: inline !important;
            }

            .d-xl-inline-block {
                display: inline-block !important;
            }

            .d-xl-block {
                display: block !important;
            }

            .d-xl-table {
                display: table !important;
            }

            .d-xl-table-row {
                display: table-row !important;
            }

            .d-xl-table-cell {
                display: table-cell !important;
            }

            .d-xl-flex {
                display: flex !important;
            }

            .d-xl-inline-flex {
                display: inline-flex !important;
            }
        }

        @media print {
            .d-print-none {
                display: none !important;
            }

            .d-print-inline {
                display: inline !important;
            }

            .d-print-inline-block {
                display: inline-block !important;
            }

            .d-print-block {
                display: block !important;
            }

            .d-print-table {
                display: table !important;
            }

            .d-print-table-row {
                display: table-row !important;
            }

            .d-print-table-cell {
                display: table-cell !important;
            }

            .d-print-flex {
                display: flex !important;
            }

            .d-print-inline-flex {
                display: inline-flex !important;
            }
        }

        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden;
        }

        .embed-responsive::before {
            display: block;
            content: "";
        }

        .embed-responsive .embed-responsive-item,
        .embed-responsive embed,
        .embed-responsive iframe,
        .embed-responsive object,
        .embed-responsive video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .embed-responsive-21by9::before {
            padding-top: 42.85714%;
        }

        .embed-responsive-16by9::before {
            padding-top: 56.25%;
        }

        .embed-responsive-4by3::before {
            padding-top: 75%;
        }

        .embed-responsive-1by1::before {
            padding-top: 100%;
        }

        .flex-row {
            flex-direction: row !important;
        }

        .flex-column {
            flex-direction: column !important;
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important;
        }

        .flex-column-reverse {
            flex-direction: column-reverse !important;
        }

        .flex-wrap {
            flex-wrap: wrap !important;
        }

        .flex-nowrap {
            flex-wrap: nowrap !important;
        }

        .flex-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .flex-fill {
            flex: 1 1 auto !important;
        }

        .flex-grow-0 {
            flex-grow: 0 !important;
        }

        .flex-grow-1 {
            flex-grow: 1 !important;
        }

        .flex-shrink-0 {
            flex-shrink: 0 !important;
        }

        .flex-shrink-1 {
            flex-shrink: 1 !important;
        }

        .justify-content-start {
            justify-content: flex-start !important;
        }

        .justify-content-end {
            justify-content: flex-end !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .justify-content-between {
            justify-content: space-between !important;
        }

        .justify-content-around {
            justify-content: space-around !important;
        }

        .align-items-start {
            align-items: flex-start !important;
        }

        .align-items-end {
            align-items: flex-end !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .align-items-baseline {
            align-items: baseline !important;
        }

        .align-items-stretch {
            align-items: stretch !important;
        }

        .align-content-start {
            align-content: flex-start !important;
        }

        .align-content-end {
            align-content: flex-end !important;
        }

        .align-content-center {
            align-content: center !important;
        }

        .align-content-between {
            align-content: space-between !important;
        }

        .align-content-around {
            align-content: space-around !important;
        }

        .align-content-stretch {
            align-content: stretch !important;
        }

        .align-self-auto {
            align-self: auto !important;
        }

        .align-self-start {
            align-self: flex-start !important;
        }

        .align-self-end {
            align-self: flex-end !important;
        }

        .align-self-center {
            align-self: center !important;
        }

        .align-self-baseline {
            align-self: baseline !important;
        }

        .align-self-stretch {
            align-self: stretch !important;
        }

        @media (min-width: 576px) {
            .flex-sm-row {
                flex-direction: row !important;
            }

            .flex-sm-column {
                flex-direction: column !important;
            }

            .flex-sm-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-sm-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-sm-wrap {
                flex-wrap: wrap !important;
            }

            .flex-sm-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-sm-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .flex-sm-fill {
                flex: 1 1 auto !important;
            }

            .flex-sm-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-sm-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-sm-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-sm-shrink-1 {
                flex-shrink: 1 !important;
            }

            .justify-content-sm-start {
                justify-content: flex-start !important;
            }

            .justify-content-sm-end {
                justify-content: flex-end !important;
            }

            .justify-content-sm-center {
                justify-content: center !important;
            }

            .justify-content-sm-between {
                justify-content: space-between !important;
            }

            .justify-content-sm-around {
                justify-content: space-around !important;
            }

            .align-items-sm-start {
                align-items: flex-start !important;
            }

            .align-items-sm-end {
                align-items: flex-end !important;
            }

            .align-items-sm-center {
                align-items: center !important;
            }

            .align-items-sm-baseline {
                align-items: baseline !important;
            }

            .align-items-sm-stretch {
                align-items: stretch !important;
            }

            .align-content-sm-start {
                align-content: flex-start !important;
            }

            .align-content-sm-end {
                align-content: flex-end !important;
            }

            .align-content-sm-center {
                align-content: center !important;
            }

            .align-content-sm-between {
                align-content: space-between !important;
            }

            .align-content-sm-around {
                align-content: space-around !important;
            }

            .align-content-sm-stretch {
                align-content: stretch !important;
            }

            .align-self-sm-auto {
                align-self: auto !important;
            }

            .align-self-sm-start {
                align-self: flex-start !important;
            }

            .align-self-sm-end {
                align-self: flex-end !important;
            }

            .align-self-sm-center {
                align-self: center !important;
            }

            .align-self-sm-baseline {
                align-self: baseline !important;
            }

            .align-self-sm-stretch {
                align-self: stretch !important;
            }
        }

        @media (min-width: 768px) {
            .flex-md-row {
                flex-direction: row !important;
            }

            .flex-md-column {
                flex-direction: column !important;
            }

            .flex-md-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-md-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-md-wrap {
                flex-wrap: wrap !important;
            }

            .flex-md-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-md-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .flex-md-fill {
                flex: 1 1 auto !important;
            }

            .flex-md-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-md-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-md-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-md-shrink-1 {
                flex-shrink: 1 !important;
            }

            .justify-content-md-start {
                justify-content: flex-start !important;
            }

            .justify-content-md-end {
                justify-content: flex-end !important;
            }

            .justify-content-md-center {
                justify-content: center !important;
            }

            .justify-content-md-between {
                justify-content: space-between !important;
            }

            .justify-content-md-around {
                justify-content: space-around !important;
            }

            .align-items-md-start {
                align-items: flex-start !important;
            }

            .align-items-md-end {
                align-items: flex-end !important;
            }

            .align-items-md-center {
                align-items: center !important;
            }

            .align-items-md-baseline {
                align-items: baseline !important;
            }

            .align-items-md-stretch {
                align-items: stretch !important;
            }

            .align-content-md-start {
                align-content: flex-start !important;
            }

            .align-content-md-end {
                align-content: flex-end !important;
            }

            .align-content-md-center {
                align-content: center !important;
            }

            .align-content-md-between {
                align-content: space-between !important;
            }

            .align-content-md-around {
                align-content: space-around !important;
            }

            .align-content-md-stretch {
                align-content: stretch !important;
            }

            .align-self-md-auto {
                align-self: auto !important;
            }

            .align-self-md-start {
                align-self: flex-start !important;
            }

            .align-self-md-end {
                align-self: flex-end !important;
            }

            .align-self-md-center {
                align-self: center !important;
            }

            .align-self-md-baseline {
                align-self: baseline !important;
            }

            .align-self-md-stretch {
                align-self: stretch !important;
            }
        }

        @media (min-width: 992px) {
            .flex-lg-row {
                flex-direction: row !important;
            }

            .flex-lg-column {
                flex-direction: column !important;
            }

            .flex-lg-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-lg-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-lg-wrap {
                flex-wrap: wrap !important;
            }

            .flex-lg-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-lg-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .flex-lg-fill {
                flex: 1 1 auto !important;
            }

            .flex-lg-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-lg-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-lg-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-lg-shrink-1 {
                flex-shrink: 1 !important;
            }

            .justify-content-lg-start {
                justify-content: flex-start !important;
            }

            .justify-content-lg-end {
                justify-content: flex-end !important;
            }

            .justify-content-lg-center {
                justify-content: center !important;
            }

            .justify-content-lg-between {
                justify-content: space-between !important;
            }

            .justify-content-lg-around {
                justify-content: space-around !important;
            }

            .align-items-lg-start {
                align-items: flex-start !important;
            }

            .align-items-lg-end {
                align-items: flex-end !important;
            }

            .align-items-lg-center {
                align-items: center !important;
            }

            .align-items-lg-baseline {
                align-items: baseline !important;
            }

            .align-items-lg-stretch {
                align-items: stretch !important;
            }

            .align-content-lg-start {
                align-content: flex-start !important;
            }

            .align-content-lg-end {
                align-content: flex-end !important;
            }

            .align-content-lg-center {
                align-content: center !important;
            }

            .align-content-lg-between {
                align-content: space-between !important;
            }

            .align-content-lg-around {
                align-content: space-around !important;
            }

            .align-content-lg-stretch {
                align-content: stretch !important;
            }

            .align-self-lg-auto {
                align-self: auto !important;
            }

            .align-self-lg-start {
                align-self: flex-start !important;
            }

            .align-self-lg-end {
                align-self: flex-end !important;
            }

            .align-self-lg-center {
                align-self: center !important;
            }

            .align-self-lg-baseline {
                align-self: baseline !important;
            }

            .align-self-lg-stretch {
                align-self: stretch !important;
            }
        }

        @media (min-width: 1200px) {
            .flex-xl-row {
                flex-direction: row !important;
            }

            .flex-xl-column {
                flex-direction: column !important;
            }

            .flex-xl-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-xl-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-xl-wrap {
                flex-wrap: wrap !important;
            }

            .flex-xl-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-xl-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .flex-xl-fill {
                flex: 1 1 auto !important;
            }

            .flex-xl-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-xl-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-xl-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-xl-shrink-1 {
                flex-shrink: 1 !important;
            }

            .justify-content-xl-start {
                justify-content: flex-start !important;
            }

            .justify-content-xl-end {
                justify-content: flex-end !important;
            }

            .justify-content-xl-center {
                justify-content: center !important;
            }

            .justify-content-xl-between {
                justify-content: space-between !important;
            }

            .justify-content-xl-around {
                justify-content: space-around !important;
            }

            .align-items-xl-start {
                align-items: flex-start !important;
            }

            .align-items-xl-end {
                align-items: flex-end !important;
            }

            .align-items-xl-center {
                align-items: center !important;
            }

            .align-items-xl-baseline {
                align-items: baseline !important;
            }

            .align-items-xl-stretch {
                align-items: stretch !important;
            }

            .align-content-xl-start {
                align-content: flex-start !important;
            }

            .align-content-xl-end {
                align-content: flex-end !important;
            }

            .align-content-xl-center {
                align-content: center !important;
            }

            .align-content-xl-between {
                align-content: space-between !important;
            }

            .align-content-xl-around {
                align-content: space-around !important;
            }

            .align-content-xl-stretch {
                align-content: stretch !important;
            }

            .align-self-xl-auto {
                align-self: auto !important;
            }

            .align-self-xl-start {
                align-self: flex-start !important;
            }

            .align-self-xl-end {
                align-self: flex-end !important;
            }

            .align-self-xl-center {
                align-self: center !important;
            }

            .align-self-xl-baseline {
                align-self: baseline !important;
            }

            .align-self-xl-stretch {
                align-self: stretch !important;
            }
        }

        .float-left {
            float: left !important;
        }

        .float-right {
            float: right !important;
        }

        .float-none {
            float: none !important;
        }

        @media (min-width: 576px) {
            .float-sm-left {
                float: left !important;
            }

            .float-sm-right {
                float: right !important;
            }

            .float-sm-none {
                float: none !important;
            }
        }

        @media (min-width: 768px) {
            .float-md-left {
                float: left !important;
            }

            .float-md-right {
                float: right !important;
            }

            .float-md-none {
                float: none !important;
            }
        }

        @media (min-width: 992px) {
            .float-lg-left {
                float: left !important;
            }

            .float-lg-right {
                float: right !important;
            }

            .float-lg-none {
                float: none !important;
            }
        }

        @media (min-width: 1200px) {
            .float-xl-left {
                float: left !important;
            }

            .float-xl-right {
                float: right !important;
            }

            .float-xl-none {
                float: none !important;
            }
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            -ms-user-select: all !important;
            user-select: all !important;
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important;
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
        }

        .overflow-auto {
            overflow: auto !important;
        }

        .overflow-hidden {
            overflow: hidden !important;
        }

        .position-static {
            position: static !important;
        }

        .position-relative {
            position: relative !important;
        }

        .position-absolute {
            position: absolute !important;
        }

        .position-fixed {
            position: fixed !important;
        }

        .position-sticky {
            position: -webkit-sticky !important;
            position: sticky !important;
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }

        @supports ((position: -webkit-sticky) or (position: sticky)) {
            .sticky-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            overflow: visible;
            clip: auto;
            white-space: normal;
        }

        .shadow-sm {
            box-shadow: 0 0.125rem 0.25rem rgba(18, 38, 63, 0.075) !important;
        }

        .shadow {
            box-shadow: 0 0.5rem 1rem rgba(18, 38, 63, 0.15) !important;
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(18, 38, 63, 0.175) !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }

        .w-25 {
            width: 25% !important;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-75 {
            width: 75% !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .w-auto {
            width: auto !important;
        }

        .w-15 {
            width: 15% !important;
        }

        .h-25 {
            height: 25% !important;
        }

        .h-50 {
            height: 50% !important;
        }

        .h-75 {
            height: 75% !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .h-auto {
            height: auto !important;
        }

        .h-15 {
            height: 15% !important;
        }

        .mw-100 {
            max-width: 100% !important;
        }

        .mh-100 {
            max-height: 100% !important;
        }

        .min-vw-100 {
            min-width: 100vw !important;
        }

        .min-vh-100 {
            min-height: 100vh !important;
        }

        .vw-100 {
            width: 100vw !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .m-0 {
            margin: 0 !important;
        }

        .mt-0,
        .my-0 {
            margin-top: 0 !important;
        }

        .mr-0,
        .mx-0 {
            margin-right: 0 !important;
        }

        .mb-0,
        .my-0 {
            margin-bottom: 0 !important;
        }

        .ml-0,
        .mx-0 {
            margin-left: 0 !important;
        }

        .m-1 {
            margin: 0.1875rem !important;
        }

        .mt-1,
        .my-1 {
            margin-top: 0.1875rem !important;
        }

        .mr-1,
        .mx-1 {
            margin-right: 0.1875rem !important;
        }

        .mb-1,
        .my-1 {
            margin-bottom: 0.1875rem !important;
        }

        .ml-1,
        .mx-1 {
            margin-left: 0.1875rem !important;
        }

        .m-2 {
            margin: 0.375rem !important;
        }

        .mt-2,
        .my-2 {
            margin-top: 0.375rem !important;
        }

        .mr-2,
        .mx-2 {
            margin-right: 0.375rem !important;
        }

        .mb-2,
        .my-2 {
            margin-bottom: 0.375rem !important;
        }

        .ml-2,
        .mx-2 {
            margin-left: 0.375rem !important;
        }

        .m-3 {
            margin: 0.75rem !important;
        }

        .mt-3,
        .my-3 {
            margin-top: 0.75rem !important;
        }

        .mr-3,
        .mx-3 {
            margin-right: 0.75rem !important;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 0.75rem !important;
        }

        .ml-3,
        .mx-3 {
            margin-left: 0.75rem !important;
        }

        .m-4 {
            margin: 1.5rem !important;
        }

        .mt-4,
        .my-4 {
            margin-top: 1.5rem !important;
        }

        .mr-4,
        .mx-4 {
            margin-right: 1.5rem !important;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        .ml-4,
        .mx-4 {
            margin-left: 1.5rem !important;
        }

        .m-5 {
            margin: 2.25rem !important;
        }

        .mt-5,
        .my-5 {
            margin-top: 2.25rem !important;
        }

        .mr-5,
        .mx-5 {
            margin-right: 2.25rem !important;
        }

        .mb-5,
        .my-5 {
            margin-bottom: 2.25rem !important;
        }

        .ml-5,
        .mx-5 {
            margin-left: 2.25rem !important;
        }

        .m-6 {
            margin: 4.5rem !important;
        }

        .mt-6,
        .my-6 {
            margin-top: 4.5rem !important;
        }

        .mr-6,
        .mx-6 {
            margin-right: 4.5rem !important;
        }

        .mb-6,
        .my-6 {
            margin-bottom: 4.5rem !important;
        }

        .ml-6,
        .mx-6 {
            margin-left: 4.5rem !important;
        }

        .m-7 {
            margin: 6.75rem !important;
        }

        .mt-7,
        .my-7 {
            margin-top: 6.75rem !important;
        }

        .mr-7,
        .mx-7 {
            margin-right: 6.75rem !important;
        }

        .mb-7,
        .my-7 {
            margin-bottom: 6.75rem !important;
        }

        .ml-7,
        .mx-7 {
            margin-left: 6.75rem !important;
        }

        .m-8 {
            margin: 13.5rem !important;
        }

        .mt-8,
        .my-8 {
            margin-top: 13.5rem !important;
        }

        .mr-8,
        .mx-8 {
            margin-right: 13.5rem !important;
        }

        .mb-8,
        .my-8 {
            margin-bottom: 13.5rem !important;
        }

        .ml-8,
        .mx-8 {
            margin-left: 13.5rem !important;
        }

        .p-0 {
            padding: 0 !important;
        }

        .pt-0,
        .py-0 {
            padding-top: 0 !important;
        }

        .pr-0,
        .px-0 {
            padding-right: 0 !important;
        }

        .pb-0,
        .py-0 {
            padding-bottom: 0 !important;
        }

        .pl-0,
        .px-0 {
            padding-left: 0 !important;
        }

        .p-1 {
            padding: 0.1875rem !important;
        }

        .pt-1,
        .py-1 {
            padding-top: 0.1875rem !important;
        }

        .pr-1,
        .px-1 {
            padding-right: 0.1875rem !important;
        }

        .pb-1,
        .py-1 {
            padding-bottom: 0.1875rem !important;
        }

        .pl-1,
        .px-1 {
            padding-left: 0.1875rem !important;
        }

        .p-2 {
            padding: 0.375rem !important;
        }

        .pt-2,
        .py-2 {
            padding-top: 0.375rem !important;
        }

        .pr-2,
        .px-2 {
            padding-right: 0.375rem !important;
        }

        .pb-2,
        .py-2 {
            padding-bottom: 0.375rem !important;
        }

        .pl-2,
        .px-2 {
            padding-left: 0.375rem !important;
        }

        .p-3 {
            padding: 0.75rem !important;
        }

        .pt-3,
        .py-3 {
            padding-top: 0.75rem !important;
        }

        .pr-3,
        .px-3 {
            padding-right: 0.75rem !important;
        }

        .pb-3,
        .py-3 {
            padding-bottom: 0.75rem !important;
        }

        .pl-3,
        .px-3 {
            padding-left: 0.75rem !important;
        }

        .p-4 {
            padding: 1.5rem !important;
        }

        .pt-4,
        .py-4 {
            padding-top: 1.5rem !important;
        }

        .pr-4,
        .px-4 {
            padding-right: 1.5rem !important;
        }

        .pb-4,
        .py-4 {
            padding-bottom: 1.5rem !important;
        }

        .pl-4,
        .px-4 {
            padding-left: 1.5rem !important;
        }

        .p-5 {
            padding: 2.25rem !important;
        }

        .pt-5,
        .py-5 {
            padding-top: 2.25rem !important;
        }

        .pr-5,
        .px-5 {
            padding-right: 2.25rem !important;
        }

        .pb-5,
        .py-5 {
            padding-bottom: 2.25rem !important;
        }

        .pl-5,
        .px-5 {
            padding-left: 2.25rem !important;
        }

        .p-6 {
            padding: 4.5rem !important;
        }

        .pt-6,
        .py-6 {
            padding-top: 4.5rem !important;
        }

        .pr-6,
        .px-6 {
            padding-right: 4.5rem !important;
        }

        .pb-6,
        .py-6 {
            padding-bottom: 4.5rem !important;
        }

        .pl-6,
        .px-6 {
            padding-left: 4.5rem !important;
        }

        .p-7 {
            padding: 6.75rem !important;
        }

        .pt-7,
        .py-7 {
            padding-top: 6.75rem !important;
        }

        .pr-7,
        .px-7 {
            padding-right: 6.75rem !important;
        }

        .pb-7,
        .py-7 {
            padding-bottom: 6.75rem !important;
        }

        .pl-7,
        .px-7 {
            padding-left: 6.75rem !important;
        }

        .p-8 {
            padding: 13.5rem !important;
        }

        .pt-8,
        .py-8 {
            padding-top: 13.5rem !important;
        }

        .pr-8,
        .px-8 {
            padding-right: 13.5rem !important;
        }

        .pb-8,
        .py-8 {
            padding-bottom: 13.5rem !important;
        }

        .pl-8,
        .px-8 {
            padding-left: 13.5rem !important;
        }

        .m-n1 {
            margin: -0.1875rem !important;
        }

        .mt-n1,
        .my-n1 {
            margin-top: -0.1875rem !important;
        }

        .mr-n1,
        .mx-n1 {
            margin-right: -0.1875rem !important;
        }

        .mb-n1,
        .my-n1 {
            margin-bottom: -0.1875rem !important;
        }

        .ml-n1,
        .mx-n1 {
            margin-left: -0.1875rem !important;
        }

        .m-n2 {
            margin: -0.375rem !important;
        }

        .mt-n2,
        .my-n2 {
            margin-top: -0.375rem !important;
        }

        .mr-n2,
        .mx-n2 {
            margin-right: -0.375rem !important;
        }

        .mb-n2,
        .my-n2 {
            margin-bottom: -0.375rem !important;
        }

        .ml-n2,
        .mx-n2 {
            margin-left: -0.375rem !important;
        }

        .m-n3 {
            margin: -0.75rem !important;
        }

        .mt-n3,
        .my-n3 {
            margin-top: -0.75rem !important;
        }

        .mr-n3,
        .mx-n3 {
            margin-right: -0.75rem !important;
        }

        .mb-n3,
        .my-n3 {
            margin-bottom: -0.75rem !important;
        }

        .ml-n3,
        .mx-n3 {
            margin-left: -0.75rem !important;
        }

        .m-n4 {
            margin: -1.5rem !important;
        }

        .mt-n4,
        .my-n4 {
            margin-top: -1.5rem !important;
        }

        .mr-n4,
        .mx-n4 {
            margin-right: -1.5rem !important;
        }

        .mb-n4,
        .my-n4 {
            margin-bottom: -1.5rem !important;
        }

        .ml-n4,
        .mx-n4 {
            margin-left: -1.5rem !important;
        }

        .m-n5 {
            margin: -2.25rem !important;
        }

        .mt-n5,
        .my-n5 {
            margin-top: -2.25rem !important;
        }

        .mr-n5,
        .mx-n5 {
            margin-right: -2.25rem !important;
        }

        .mb-n5,
        .my-n5 {
            margin-bottom: -2.25rem !important;
        }

        .ml-n5,
        .mx-n5 {
            margin-left: -2.25rem !important;
        }

        .m-n6 {
            margin: -4.5rem !important;
        }

        .mt-n6,
        .my-n6 {
            margin-top: -4.5rem !important;
        }

        .mr-n6,
        .mx-n6 {
            margin-right: -4.5rem !important;
        }

        .mb-n6,
        .my-n6 {
            margin-bottom: -4.5rem !important;
        }

        .ml-n6,
        .mx-n6 {
            margin-left: -4.5rem !important;
        }

        .m-n7 {
            margin: -6.75rem !important;
        }

        .mt-n7,
        .my-n7 {
            margin-top: -6.75rem !important;
        }

        .mr-n7,
        .mx-n7 {
            margin-right: -6.75rem !important;
        }

        .mb-n7,
        .my-n7 {
            margin-bottom: -6.75rem !important;
        }

        .ml-n7,
        .mx-n7 {
            margin-left: -6.75rem !important;
        }

        .m-n8 {
            margin: -13.5rem !important;
        }

        .mt-n8,
        .my-n8 {
            margin-top: -13.5rem !important;
        }

        .mr-n8,
        .mx-n8 {
            margin-right: -13.5rem !important;
        }

        .mb-n8,
        .my-n8 {
            margin-bottom: -13.5rem !important;
        }

        .ml-n8,
        .mx-n8 {
            margin-left: -13.5rem !important;
        }

        .m-auto {
            margin: auto !important;
        }

        .mt-auto,
        .my-auto {
            margin-top: auto !important;
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto !important;
        }

        .mb-auto,
        .my-auto {
            margin-bottom: auto !important;
        }

        .ml-auto,
        .mx-auto {
            margin-left: auto !important;
        }

        @media (min-width: 576px) {
            .m-sm-0 {
                margin: 0 !important;
            }

            .mt-sm-0,
            .my-sm-0 {
                margin-top: 0 !important;
            }

            .mr-sm-0,
            .mx-sm-0 {
                margin-right: 0 !important;
            }

            .mb-sm-0,
            .my-sm-0 {
                margin-bottom: 0 !important;
            }

            .ml-sm-0,
            .mx-sm-0 {
                margin-left: 0 !important;
            }

            .m-sm-1 {
                margin: 0.1875rem !important;
            }

            .mt-sm-1,
            .my-sm-1 {
                margin-top: 0.1875rem !important;
            }

            .mr-sm-1,
            .mx-sm-1 {
                margin-right: 0.1875rem !important;
            }

            .mb-sm-1,
            .my-sm-1 {
                margin-bottom: 0.1875rem !important;
            }

            .ml-sm-1,
            .mx-sm-1 {
                margin-left: 0.1875rem !important;
            }

            .m-sm-2 {
                margin: 0.375rem !important;
            }

            .mt-sm-2,
            .my-sm-2 {
                margin-top: 0.375rem !important;
            }

            .mr-sm-2,
            .mx-sm-2 {
                margin-right: 0.375rem !important;
            }

            .mb-sm-2,
            .my-sm-2 {
                margin-bottom: 0.375rem !important;
            }

            .ml-sm-2,
            .mx-sm-2 {
                margin-left: 0.375rem !important;
            }

            .m-sm-3 {
                margin: 0.75rem !important;
            }

            .mt-sm-3,
            .my-sm-3 {
                margin-top: 0.75rem !important;
            }

            .mr-sm-3,
            .mx-sm-3 {
                margin-right: 0.75rem !important;
            }

            .mb-sm-3,
            .my-sm-3 {
                margin-bottom: 0.75rem !important;
            }

            .ml-sm-3,
            .mx-sm-3 {
                margin-left: 0.75rem !important;
            }

            .m-sm-4 {
                margin: 1.5rem !important;
            }

            .mt-sm-4,
            .my-sm-4 {
                margin-top: 1.5rem !important;
            }

            .mr-sm-4,
            .mx-sm-4 {
                margin-right: 1.5rem !important;
            }

            .mb-sm-4,
            .my-sm-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-sm-4,
            .mx-sm-4 {
                margin-left: 1.5rem !important;
            }

            .m-sm-5 {
                margin: 2.25rem !important;
            }

            .mt-sm-5,
            .my-sm-5 {
                margin-top: 2.25rem !important;
            }

            .mr-sm-5,
            .mx-sm-5 {
                margin-right: 2.25rem !important;
            }

            .mb-sm-5,
            .my-sm-5 {
                margin-bottom: 2.25rem !important;
            }

            .ml-sm-5,
            .mx-sm-5 {
                margin-left: 2.25rem !important;
            }

            .m-sm-6 {
                margin: 4.5rem !important;
            }

            .mt-sm-6,
            .my-sm-6 {
                margin-top: 4.5rem !important;
            }

            .mr-sm-6,
            .mx-sm-6 {
                margin-right: 4.5rem !important;
            }

            .mb-sm-6,
            .my-sm-6 {
                margin-bottom: 4.5rem !important;
            }

            .ml-sm-6,
            .mx-sm-6 {
                margin-left: 4.5rem !important;
            }

            .m-sm-7 {
                margin: 6.75rem !important;
            }

            .mt-sm-7,
            .my-sm-7 {
                margin-top: 6.75rem !important;
            }

            .mr-sm-7,
            .mx-sm-7 {
                margin-right: 6.75rem !important;
            }

            .mb-sm-7,
            .my-sm-7 {
                margin-bottom: 6.75rem !important;
            }

            .ml-sm-7,
            .mx-sm-7 {
                margin-left: 6.75rem !important;
            }

            .m-sm-8 {
                margin: 13.5rem !important;
            }

            .mt-sm-8,
            .my-sm-8 {
                margin-top: 13.5rem !important;
            }

            .mr-sm-8,
            .mx-sm-8 {
                margin-right: 13.5rem !important;
            }

            .mb-sm-8,
            .my-sm-8 {
                margin-bottom: 13.5rem !important;
            }

            .ml-sm-8,
            .mx-sm-8 {
                margin-left: 13.5rem !important;
            }

            .p-sm-0 {
                padding: 0 !important;
            }

            .pt-sm-0,
            .py-sm-0 {
                padding-top: 0 !important;
            }

            .pr-sm-0,
            .px-sm-0 {
                padding-right: 0 !important;
            }

            .pb-sm-0,
            .py-sm-0 {
                padding-bottom: 0 !important;
            }

            .pl-sm-0,
            .px-sm-0 {
                padding-left: 0 !important;
            }

            .p-sm-1 {
                padding: 0.1875rem !important;
            }

            .pt-sm-1,
            .py-sm-1 {
                padding-top: 0.1875rem !important;
            }

            .pr-sm-1,
            .px-sm-1 {
                padding-right: 0.1875rem !important;
            }

            .pb-sm-1,
            .py-sm-1 {
                padding-bottom: 0.1875rem !important;
            }

            .pl-sm-1,
            .px-sm-1 {
                padding-left: 0.1875rem !important;
            }

            .p-sm-2 {
                padding: 0.375rem !important;
            }

            .pt-sm-2,
            .py-sm-2 {
                padding-top: 0.375rem !important;
            }

            .pr-sm-2,
            .px-sm-2 {
                padding-right: 0.375rem !important;
            }

            .pb-sm-2,
            .py-sm-2 {
                padding-bottom: 0.375rem !important;
            }

            .pl-sm-2,
            .px-sm-2 {
                padding-left: 0.375rem !important;
            }

            .p-sm-3 {
                padding: 0.75rem !important;
            }

            .pt-sm-3,
            .py-sm-3 {
                padding-top: 0.75rem !important;
            }

            .pr-sm-3,
            .px-sm-3 {
                padding-right: 0.75rem !important;
            }

            .pb-sm-3,
            .py-sm-3 {
                padding-bottom: 0.75rem !important;
            }

            .pl-sm-3,
            .px-sm-3 {
                padding-left: 0.75rem !important;
            }

            .p-sm-4 {
                padding: 1.5rem !important;
            }

            .pt-sm-4,
            .py-sm-4 {
                padding-top: 1.5rem !important;
            }

            .pr-sm-4,
            .px-sm-4 {
                padding-right: 1.5rem !important;
            }

            .pb-sm-4,
            .py-sm-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-sm-4,
            .px-sm-4 {
                padding-left: 1.5rem !important;
            }

            .p-sm-5 {
                padding: 2.25rem !important;
            }

            .pt-sm-5,
            .py-sm-5 {
                padding-top: 2.25rem !important;
            }

            .pr-sm-5,
            .px-sm-5 {
                padding-right: 2.25rem !important;
            }

            .pb-sm-5,
            .py-sm-5 {
                padding-bottom: 2.25rem !important;
            }

            .pl-sm-5,
            .px-sm-5 {
                padding-left: 2.25rem !important;
            }

            .p-sm-6 {
                padding: 4.5rem !important;
            }

            .pt-sm-6,
            .py-sm-6 {
                padding-top: 4.5rem !important;
            }

            .pr-sm-6,
            .px-sm-6 {
                padding-right: 4.5rem !important;
            }

            .pb-sm-6,
            .py-sm-6 {
                padding-bottom: 4.5rem !important;
            }

            .pl-sm-6,
            .px-sm-6 {
                padding-left: 4.5rem !important;
            }

            .p-sm-7 {
                padding: 6.75rem !important;
            }

            .pt-sm-7,
            .py-sm-7 {
                padding-top: 6.75rem !important;
            }

            .pr-sm-7,
            .px-sm-7 {
                padding-right: 6.75rem !important;
            }

            .pb-sm-7,
            .py-sm-7 {
                padding-bottom: 6.75rem !important;
            }

            .pl-sm-7,
            .px-sm-7 {
                padding-left: 6.75rem !important;
            }

            .p-sm-8 {
                padding: 13.5rem !important;
            }

            .pt-sm-8,
            .py-sm-8 {
                padding-top: 13.5rem !important;
            }

            .pr-sm-8,
            .px-sm-8 {
                padding-right: 13.5rem !important;
            }

            .pb-sm-8,
            .py-sm-8 {
                padding-bottom: 13.5rem !important;
            }

            .pl-sm-8,
            .px-sm-8 {
                padding-left: 13.5rem !important;
            }

            .m-sm-n1 {
                margin: -0.1875rem !important;
            }

            .mt-sm-n1,
            .my-sm-n1 {
                margin-top: -0.1875rem !important;
            }

            .mr-sm-n1,
            .mx-sm-n1 {
                margin-right: -0.1875rem !important;
            }

            .mb-sm-n1,
            .my-sm-n1 {
                margin-bottom: -0.1875rem !important;
            }

            .ml-sm-n1,
            .mx-sm-n1 {
                margin-left: -0.1875rem !important;
            }

            .m-sm-n2 {
                margin: -0.375rem !important;
            }

            .mt-sm-n2,
            .my-sm-n2 {
                margin-top: -0.375rem !important;
            }

            .mr-sm-n2,
            .mx-sm-n2 {
                margin-right: -0.375rem !important;
            }

            .mb-sm-n2,
            .my-sm-n2 {
                margin-bottom: -0.375rem !important;
            }

            .ml-sm-n2,
            .mx-sm-n2 {
                margin-left: -0.375rem !important;
            }

            .m-sm-n3 {
                margin: -0.75rem !important;
            }

            .mt-sm-n3,
            .my-sm-n3 {
                margin-top: -0.75rem !important;
            }

            .mr-sm-n3,
            .mx-sm-n3 {
                margin-right: -0.75rem !important;
            }

            .mb-sm-n3,
            .my-sm-n3 {
                margin-bottom: -0.75rem !important;
            }

            .ml-sm-n3,
            .mx-sm-n3 {
                margin-left: -0.75rem !important;
            }

            .m-sm-n4 {
                margin: -1.5rem !important;
            }

            .mt-sm-n4,
            .my-sm-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-sm-n4,
            .mx-sm-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-sm-n4,
            .my-sm-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-sm-n4,
            .mx-sm-n4 {
                margin-left: -1.5rem !important;
            }

            .m-sm-n5 {
                margin: -2.25rem !important;
            }

            .mt-sm-n5,
            .my-sm-n5 {
                margin-top: -2.25rem !important;
            }

            .mr-sm-n5,
            .mx-sm-n5 {
                margin-right: -2.25rem !important;
            }

            .mb-sm-n5,
            .my-sm-n5 {
                margin-bottom: -2.25rem !important;
            }

            .ml-sm-n5,
            .mx-sm-n5 {
                margin-left: -2.25rem !important;
            }

            .m-sm-n6 {
                margin: -4.5rem !important;
            }

            .mt-sm-n6,
            .my-sm-n6 {
                margin-top: -4.5rem !important;
            }

            .mr-sm-n6,
            .mx-sm-n6 {
                margin-right: -4.5rem !important;
            }

            .mb-sm-n6,
            .my-sm-n6 {
                margin-bottom: -4.5rem !important;
            }

            .ml-sm-n6,
            .mx-sm-n6 {
                margin-left: -4.5rem !important;
            }

            .m-sm-n7 {
                margin: -6.75rem !important;
            }

            .mt-sm-n7,
            .my-sm-n7 {
                margin-top: -6.75rem !important;
            }

            .mr-sm-n7,
            .mx-sm-n7 {
                margin-right: -6.75rem !important;
            }

            .mb-sm-n7,
            .my-sm-n7 {
                margin-bottom: -6.75rem !important;
            }

            .ml-sm-n7,
            .mx-sm-n7 {
                margin-left: -6.75rem !important;
            }

            .m-sm-n8 {
                margin: -13.5rem !important;
            }

            .mt-sm-n8,
            .my-sm-n8 {
                margin-top: -13.5rem !important;
            }

            .mr-sm-n8,
            .mx-sm-n8 {
                margin-right: -13.5rem !important;
            }

            .mb-sm-n8,
            .my-sm-n8 {
                margin-bottom: -13.5rem !important;
            }

            .ml-sm-n8,
            .mx-sm-n8 {
                margin-left: -13.5rem !important;
            }

            .m-sm-auto {
                margin: auto !important;
            }

            .mt-sm-auto,
            .my-sm-auto {
                margin-top: auto !important;
            }

            .mr-sm-auto,
            .mx-sm-auto {
                margin-right: auto !important;
            }

            .mb-sm-auto,
            .my-sm-auto {
                margin-bottom: auto !important;
            }

            .ml-sm-auto,
            .mx-sm-auto {
                margin-left: auto !important;
            }
        }

        @media (min-width: 768px) {
            .m-md-0 {
                margin: 0 !important;
            }

            .mt-md-0,
            .my-md-0 {
                margin-top: 0 !important;
            }

            .mr-md-0,
            .mx-md-0 {
                margin-right: 0 !important;
            }

            .mb-md-0,
            .my-md-0 {
                margin-bottom: 0 !important;
            }

            .ml-md-0,
            .mx-md-0 {
                margin-left: 0 !important;
            }

            .m-md-1 {
                margin: 0.1875rem !important;
            }

            .mt-md-1,
            .my-md-1 {
                margin-top: 0.1875rem !important;
            }

            .mr-md-1,
            .mx-md-1 {
                margin-right: 0.1875rem !important;
            }

            .mb-md-1,
            .my-md-1 {
                margin-bottom: 0.1875rem !important;
            }

            .ml-md-1,
            .mx-md-1 {
                margin-left: 0.1875rem !important;
            }

            .m-md-2 {
                margin: 0.375rem !important;
            }

            .mt-md-2,
            .my-md-2 {
                margin-top: 0.375rem !important;
            }

            .mr-md-2,
            .mx-md-2 {
                margin-right: 0.375rem !important;
            }

            .mb-md-2,
            .my-md-2 {
                margin-bottom: 0.375rem !important;
            }

            .ml-md-2,
            .mx-md-2 {
                margin-left: 0.375rem !important;
            }

            .m-md-3 {
                margin: 0.75rem !important;
            }

            .mt-md-3,
            .my-md-3 {
                margin-top: 0.75rem !important;
            }

            .mr-md-3,
            .mx-md-3 {
                margin-right: 0.75rem !important;
            }

            .mb-md-3,
            .my-md-3 {
                margin-bottom: 0.75rem !important;
            }

            .ml-md-3,
            .mx-md-3 {
                margin-left: 0.75rem !important;
            }

            .m-md-4 {
                margin: 1.5rem !important;
            }

            .mt-md-4,
            .my-md-4 {
                margin-top: 1.5rem !important;
            }

            .mr-md-4,
            .mx-md-4 {
                margin-right: 1.5rem !important;
            }

            .mb-md-4,
            .my-md-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-md-4,
            .mx-md-4 {
                margin-left: 1.5rem !important;
            }

            .m-md-5 {
                margin: 2.25rem !important;
            }

            .mt-md-5,
            .my-md-5 {
                margin-top: 2.25rem !important;
            }

            .mr-md-5,
            .mx-md-5 {
                margin-right: 2.25rem !important;
            }

            .mb-md-5,
            .my-md-5 {
                margin-bottom: 2.25rem !important;
            }

            .ml-md-5,
            .mx-md-5 {
                margin-left: 2.25rem !important;
            }

            .m-md-6 {
                margin: 4.5rem !important;
            }

            .mt-md-6,
            .my-md-6 {
                margin-top: 4.5rem !important;
            }

            .mr-md-6,
            .mx-md-6 {
                margin-right: 4.5rem !important;
            }

            .mb-md-6,
            .my-md-6 {
                margin-bottom: 4.5rem !important;
            }

            .ml-md-6,
            .mx-md-6 {
                margin-left: 4.5rem !important;
            }

            .m-md-7 {
                margin: 6.75rem !important;
            }

            .mt-md-7,
            .my-md-7 {
                margin-top: 6.75rem !important;
            }

            .mr-md-7,
            .mx-md-7 {
                margin-right: 6.75rem !important;
            }

            .mb-md-7,
            .my-md-7 {
                margin-bottom: 6.75rem !important;
            }

            .ml-md-7,
            .mx-md-7 {
                margin-left: 6.75rem !important;
            }

            .m-md-8 {
                margin: 13.5rem !important;
            }

            .mt-md-8,
            .my-md-8 {
                margin-top: 13.5rem !important;
            }

            .mr-md-8,
            .mx-md-8 {
                margin-right: 13.5rem !important;
            }

            .mb-md-8,
            .my-md-8 {
                margin-bottom: 13.5rem !important;
            }

            .ml-md-8,
            .mx-md-8 {
                margin-left: 13.5rem !important;
            }

            .p-md-0 {
                padding: 0 !important;
            }

            .pt-md-0,
            .py-md-0 {
                padding-top: 0 !important;
            }

            .pr-md-0,
            .px-md-0 {
                padding-right: 0 !important;
            }

            .pb-md-0,
            .py-md-0 {
                padding-bottom: 0 !important;
            }

            .pl-md-0,
            .px-md-0 {
                padding-left: 0 !important;
            }

            .p-md-1 {
                padding: 0.1875rem !important;
            }

            .pt-md-1,
            .py-md-1 {
                padding-top: 0.1875rem !important;
            }

            .pr-md-1,
            .px-md-1 {
                padding-right: 0.1875rem !important;
            }

            .pb-md-1,
            .py-md-1 {
                padding-bottom: 0.1875rem !important;
            }

            .pl-md-1,
            .px-md-1 {
                padding-left: 0.1875rem !important;
            }

            .p-md-2 {
                padding: 0.375rem !important;
            }

            .pt-md-2,
            .py-md-2 {
                padding-top: 0.375rem !important;
            }

            .pr-md-2,
            .px-md-2 {
                padding-right: 0.375rem !important;
            }

            .pb-md-2,
            .py-md-2 {
                padding-bottom: 0.375rem !important;
            }

            .pl-md-2,
            .px-md-2 {
                padding-left: 0.375rem !important;
            }

            .p-md-3 {
                padding: 0.75rem !important;
            }

            .pt-md-3,
            .py-md-3 {
                padding-top: 0.75rem !important;
            }

            .pr-md-3,
            .px-md-3 {
                padding-right: 0.75rem !important;
            }

            .pb-md-3,
            .py-md-3 {
                padding-bottom: 0.75rem !important;
            }

            .pl-md-3,
            .px-md-3 {
                padding-left: 0.75rem !important;
            }

            .p-md-4 {
                padding: 1.5rem !important;
            }

            .pt-md-4,
            .py-md-4 {
                padding-top: 1.5rem !important;
            }

            .pr-md-4,
            .px-md-4 {
                padding-right: 1.5rem !important;
            }

            .pb-md-4,
            .py-md-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-md-4,
            .px-md-4 {
                padding-left: 1.5rem !important;
            }

            .p-md-5 {
                padding: 2.25rem !important;
            }

            .pt-md-5,
            .py-md-5 {
                padding-top: 2.25rem !important;
            }

            .pr-md-5,
            .px-md-5 {
                padding-right: 2.25rem !important;
            }

            .pb-md-5,
            .py-md-5 {
                padding-bottom: 2.25rem !important;
            }

            .pl-md-5,
            .px-md-5 {
                padding-left: 2.25rem !important;
            }

            .p-md-6 {
                padding: 4.5rem !important;
            }

            .pt-md-6,
            .py-md-6 {
                padding-top: 4.5rem !important;
            }

            .pr-md-6,
            .px-md-6 {
                padding-right: 4.5rem !important;
            }

            .pb-md-6,
            .py-md-6 {
                padding-bottom: 4.5rem !important;
            }

            .pl-md-6,
            .px-md-6 {
                padding-left: 4.5rem !important;
            }

            .p-md-7 {
                padding: 6.75rem !important;
            }

            .pt-md-7,
            .py-md-7 {
                padding-top: 6.75rem !important;
            }

            .pr-md-7,
            .px-md-7 {
                padding-right: 6.75rem !important;
            }

            .pb-md-7,
            .py-md-7 {
                padding-bottom: 6.75rem !important;
            }

            .pl-md-7,
            .px-md-7 {
                padding-left: 6.75rem !important;
            }

            .p-md-8 {
                padding: 13.5rem !important;
            }

            .pt-md-8,
            .py-md-8 {
                padding-top: 13.5rem !important;
            }

            .pr-md-8,
            .px-md-8 {
                padding-right: 13.5rem !important;
            }

            .pb-md-8,
            .py-md-8 {
                padding-bottom: 13.5rem !important;
            }

            .pl-md-8,
            .px-md-8 {
                padding-left: 13.5rem !important;
            }

            .m-md-n1 {
                margin: -0.1875rem !important;
            }

            .mt-md-n1,
            .my-md-n1 {
                margin-top: -0.1875rem !important;
            }

            .mr-md-n1,
            .mx-md-n1 {
                margin-right: -0.1875rem !important;
            }

            .mb-md-n1,
            .my-md-n1 {
                margin-bottom: -0.1875rem !important;
            }

            .ml-md-n1,
            .mx-md-n1 {
                margin-left: -0.1875rem !important;
            }

            .m-md-n2 {
                margin: -0.375rem !important;
            }

            .mt-md-n2,
            .my-md-n2 {
                margin-top: -0.375rem !important;
            }

            .mr-md-n2,
            .mx-md-n2 {
                margin-right: -0.375rem !important;
            }

            .mb-md-n2,
            .my-md-n2 {
                margin-bottom: -0.375rem !important;
            }

            .ml-md-n2,
            .mx-md-n2 {
                margin-left: -0.375rem !important;
            }

            .m-md-n3 {
                margin: -0.75rem !important;
            }

            .mt-md-n3,
            .my-md-n3 {
                margin-top: -0.75rem !important;
            }

            .mr-md-n3,
            .mx-md-n3 {
                margin-right: -0.75rem !important;
            }

            .mb-md-n3,
            .my-md-n3 {
                margin-bottom: -0.75rem !important;
            }

            .ml-md-n3,
            .mx-md-n3 {
                margin-left: -0.75rem !important;
            }

            .m-md-n4 {
                margin: -1.5rem !important;
            }

            .mt-md-n4,
            .my-md-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-md-n4,
            .mx-md-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-md-n4,
            .my-md-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-md-n4,
            .mx-md-n4 {
                margin-left: -1.5rem !important;
            }

            .m-md-n5 {
                margin: -2.25rem !important;
            }

            .mt-md-n5,
            .my-md-n5 {
                margin-top: -2.25rem !important;
            }

            .mr-md-n5,
            .mx-md-n5 {
                margin-right: -2.25rem !important;
            }

            .mb-md-n5,
            .my-md-n5 {
                margin-bottom: -2.25rem !important;
            }

            .ml-md-n5,
            .mx-md-n5 {
                margin-left: -2.25rem !important;
            }

            .m-md-n6 {
                margin: -4.5rem !important;
            }

            .mt-md-n6,
            .my-md-n6 {
                margin-top: -4.5rem !important;
            }

            .mr-md-n6,
            .mx-md-n6 {
                margin-right: -4.5rem !important;
            }

            .mb-md-n6,
            .my-md-n6 {
                margin-bottom: -4.5rem !important;
            }

            .ml-md-n6,
            .mx-md-n6 {
                margin-left: -4.5rem !important;
            }

            .m-md-n7 {
                margin: -6.75rem !important;
            }

            .mt-md-n7,
            .my-md-n7 {
                margin-top: -6.75rem !important;
            }

            .mr-md-n7,
            .mx-md-n7 {
                margin-right: -6.75rem !important;
            }

            .mb-md-n7,
            .my-md-n7 {
                margin-bottom: -6.75rem !important;
            }

            .ml-md-n7,
            .mx-md-n7 {
                margin-left: -6.75rem !important;
            }

            .m-md-n8 {
                margin: -13.5rem !important;
            }

            .mt-md-n8,
            .my-md-n8 {
                margin-top: -13.5rem !important;
            }

            .mr-md-n8,
            .mx-md-n8 {
                margin-right: -13.5rem !important;
            }

            .mb-md-n8,
            .my-md-n8 {
                margin-bottom: -13.5rem !important;
            }

            .ml-md-n8,
            .mx-md-n8 {
                margin-left: -13.5rem !important;
            }

            .m-md-auto {
                margin: auto !important;
            }

            .mt-md-auto,
            .my-md-auto {
                margin-top: auto !important;
            }

            .mr-md-auto,
            .mx-md-auto {
                margin-right: auto !important;
            }

            .mb-md-auto,
            .my-md-auto {
                margin-bottom: auto !important;
            }

            .ml-md-auto,
            .mx-md-auto {
                margin-left: auto !important;
            }
        }

        @media (min-width: 992px) {
            .m-lg-0 {
                margin: 0 !important;
            }

            .mt-lg-0,
            .my-lg-0 {
                margin-top: 0 !important;
            }

            .mr-lg-0,
            .mx-lg-0 {
                margin-right: 0 !important;
            }

            .mb-lg-0,
            .my-lg-0 {
                margin-bottom: 0 !important;
            }

            .ml-lg-0,
            .mx-lg-0 {
                margin-left: 0 !important;
            }

            .m-lg-1 {
                margin: 0.1875rem !important;
            }

            .mt-lg-1,
            .my-lg-1 {
                margin-top: 0.1875rem !important;
            }

            .mr-lg-1,
            .mx-lg-1 {
                margin-right: 0.1875rem !important;
            }

            .mb-lg-1,
            .my-lg-1 {
                margin-bottom: 0.1875rem !important;
            }

            .ml-lg-1,
            .mx-lg-1 {
                margin-left: 0.1875rem !important;
            }

            .m-lg-2 {
                margin: 0.375rem !important;
            }

            .mt-lg-2,
            .my-lg-2 {
                margin-top: 0.375rem !important;
            }

            .mr-lg-2,
            .mx-lg-2 {
                margin-right: 0.375rem !important;
            }

            .mb-lg-2,
            .my-lg-2 {
                margin-bottom: 0.375rem !important;
            }

            .ml-lg-2,
            .mx-lg-2 {
                margin-left: 0.375rem !important;
            }

            .m-lg-3 {
                margin: 0.75rem !important;
            }

            .mt-lg-3,
            .my-lg-3 {
                margin-top: 0.75rem !important;
            }

            .mr-lg-3,
            .mx-lg-3 {
                margin-right: 0.75rem !important;
            }

            .mb-lg-3,
            .my-lg-3 {
                margin-bottom: 0.75rem !important;
            }

            .ml-lg-3,
            .mx-lg-3 {
                margin-left: 0.75rem !important;
            }

            .m-lg-4 {
                margin: 1.5rem !important;
            }

            .mt-lg-4,
            .my-lg-4 {
                margin-top: 1.5rem !important;
            }

            .mr-lg-4,
            .mx-lg-4 {
                margin-right: 1.5rem !important;
            }

            .mb-lg-4,
            .my-lg-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-lg-4,
            .mx-lg-4 {
                margin-left: 1.5rem !important;
            }

            .m-lg-5 {
                margin: 2.25rem !important;
            }

            .mt-lg-5,
            .my-lg-5 {
                margin-top: 2.25rem !important;
            }

            .mr-lg-5,
            .mx-lg-5 {
                margin-right: 2.25rem !important;
            }

            .mb-lg-5,
            .my-lg-5 {
                margin-bottom: 2.25rem !important;
            }

            .ml-lg-5,
            .mx-lg-5 {
                margin-left: 2.25rem !important;
            }

            .m-lg-6 {
                margin: 4.5rem !important;
            }

            .mt-lg-6,
            .my-lg-6 {
                margin-top: 4.5rem !important;
            }

            .mr-lg-6,
            .mx-lg-6 {
                margin-right: 4.5rem !important;
            }

            .mb-lg-6,
            .my-lg-6 {
                margin-bottom: 4.5rem !important;
            }

            .ml-lg-6,
            .mx-lg-6 {
                margin-left: 4.5rem !important;
            }

            .m-lg-7 {
                margin: 6.75rem !important;
            }

            .mt-lg-7,
            .my-lg-7 {
                margin-top: 6.75rem !important;
            }

            .mr-lg-7,
            .mx-lg-7 {
                margin-right: 6.75rem !important;
            }

            .mb-lg-7,
            .my-lg-7 {
                margin-bottom: 6.75rem !important;
            }

            .ml-lg-7,
            .mx-lg-7 {
                margin-left: 6.75rem !important;
            }

            .m-lg-8 {
                margin: 13.5rem !important;
            }

            .mt-lg-8,
            .my-lg-8 {
                margin-top: 13.5rem !important;
            }

            .mr-lg-8,
            .mx-lg-8 {
                margin-right: 13.5rem !important;
            }

            .mb-lg-8,
            .my-lg-8 {
                margin-bottom: 13.5rem !important;
            }

            .ml-lg-8,
            .mx-lg-8 {
                margin-left: 13.5rem !important;
            }

            .p-lg-0 {
                padding: 0 !important;
            }

            .pt-lg-0,
            .py-lg-0 {
                padding-top: 0 !important;
            }

            .pr-lg-0,
            .px-lg-0 {
                padding-right: 0 !important;
            }

            .pb-lg-0,
            .py-lg-0 {
                padding-bottom: 0 !important;
            }

            .pl-lg-0,
            .px-lg-0 {
                padding-left: 0 !important;
            }

            .p-lg-1 {
                padding: 0.1875rem !important;
            }

            .pt-lg-1,
            .py-lg-1 {
                padding-top: 0.1875rem !important;
            }

            .pr-lg-1,
            .px-lg-1 {
                padding-right: 0.1875rem !important;
            }

            .pb-lg-1,
            .py-lg-1 {
                padding-bottom: 0.1875rem !important;
            }

            .pl-lg-1,
            .px-lg-1 {
                padding-left: 0.1875rem !important;
            }

            .p-lg-2 {
                padding: 0.375rem !important;
            }

            .pt-lg-2,
            .py-lg-2 {
                padding-top: 0.375rem !important;
            }

            .pr-lg-2,
            .px-lg-2 {
                padding-right: 0.375rem !important;
            }

            .pb-lg-2,
            .py-lg-2 {
                padding-bottom: 0.375rem !important;
            }

            .pl-lg-2,
            .px-lg-2 {
                padding-left: 0.375rem !important;
            }

            .p-lg-3 {
                padding: 0.75rem !important;
            }

            .pt-lg-3,
            .py-lg-3 {
                padding-top: 0.75rem !important;
            }

            .pr-lg-3,
            .px-lg-3 {
                padding-right: 0.75rem !important;
            }

            .pb-lg-3,
            .py-lg-3 {
                padding-bottom: 0.75rem !important;
            }

            .pl-lg-3,
            .px-lg-3 {
                padding-left: 0.75rem !important;
            }

            .p-lg-4 {
                padding: 1.5rem !important;
            }

            .pt-lg-4,
            .py-lg-4 {
                padding-top: 1.5rem !important;
            }

            .pr-lg-4,
            .px-lg-4 {
                padding-right: 1.5rem !important;
            }

            .pb-lg-4,
            .py-lg-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-lg-4,
            .px-lg-4 {
                padding-left: 1.5rem !important;
            }

            .p-lg-5 {
                padding: 2.25rem !important;
            }

            .pt-lg-5,
            .py-lg-5 {
                padding-top: 2.25rem !important;
            }

            .pr-lg-5,
            .px-lg-5 {
                padding-right: 2.25rem !important;
            }

            .pb-lg-5,
            .py-lg-5 {
                padding-bottom: 2.25rem !important;
            }

            .pl-lg-5,
            .px-lg-5 {
                padding-left: 2.25rem !important;
            }

            .p-lg-6 {
                padding: 4.5rem !important;
            }

            .pt-lg-6,
            .py-lg-6 {
                padding-top: 4.5rem !important;
            }

            .pr-lg-6,
            .px-lg-6 {
                padding-right: 4.5rem !important;
            }

            .pb-lg-6,
            .py-lg-6 {
                padding-bottom: 4.5rem !important;
            }

            .pl-lg-6,
            .px-lg-6 {
                padding-left: 4.5rem !important;
            }

            .p-lg-7 {
                padding: 6.75rem !important;
            }

            .pt-lg-7,
            .py-lg-7 {
                padding-top: 6.75rem !important;
            }

            .pr-lg-7,
            .px-lg-7 {
                padding-right: 6.75rem !important;
            }

            .pb-lg-7,
            .py-lg-7 {
                padding-bottom: 6.75rem !important;
            }

            .pl-lg-7,
            .px-lg-7 {
                padding-left: 6.75rem !important;
            }

            .p-lg-8 {
                padding: 13.5rem !important;
            }

            .pt-lg-8,
            .py-lg-8 {
                padding-top: 13.5rem !important;
            }

            .pr-lg-8,
            .px-lg-8 {
                padding-right: 13.5rem !important;
            }

            .pb-lg-8,
            .py-lg-8 {
                padding-bottom: 13.5rem !important;
            }

            .pl-lg-8,
            .px-lg-8 {
                padding-left: 13.5rem !important;
            }

            .m-lg-n1 {
                margin: -0.1875rem !important;
            }

            .mt-lg-n1,
            .my-lg-n1 {
                margin-top: -0.1875rem !important;
            }

            .mr-lg-n1,
            .mx-lg-n1 {
                margin-right: -0.1875rem !important;
            }

            .mb-lg-n1,
            .my-lg-n1 {
                margin-bottom: -0.1875rem !important;
            }

            .ml-lg-n1,
            .mx-lg-n1 {
                margin-left: -0.1875rem !important;
            }

            .m-lg-n2 {
                margin: -0.375rem !important;
            }

            .mt-lg-n2,
            .my-lg-n2 {
                margin-top: -0.375rem !important;
            }

            .mr-lg-n2,
            .mx-lg-n2 {
                margin-right: -0.375rem !important;
            }

            .mb-lg-n2,
            .my-lg-n2 {
                margin-bottom: -0.375rem !important;
            }

            .ml-lg-n2,
            .mx-lg-n2 {
                margin-left: -0.375rem !important;
            }

            .m-lg-n3 {
                margin: -0.75rem !important;
            }

            .mt-lg-n3,
            .my-lg-n3 {
                margin-top: -0.75rem !important;
            }

            .mr-lg-n3,
            .mx-lg-n3 {
                margin-right: -0.75rem !important;
            }

            .mb-lg-n3,
            .my-lg-n3 {
                margin-bottom: -0.75rem !important;
            }

            .ml-lg-n3,
            .mx-lg-n3 {
                margin-left: -0.75rem !important;
            }

            .m-lg-n4 {
                margin: -1.5rem !important;
            }

            .mt-lg-n4,
            .my-lg-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-lg-n4,
            .mx-lg-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-lg-n4,
            .my-lg-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-lg-n4,
            .mx-lg-n4 {
                margin-left: -1.5rem !important;
            }

            .m-lg-n5 {
                margin: -2.25rem !important;
            }

            .mt-lg-n5,
            .my-lg-n5 {
                margin-top: -2.25rem !important;
            }

            .mr-lg-n5,
            .mx-lg-n5 {
                margin-right: -2.25rem !important;
            }

            .mb-lg-n5,
            .my-lg-n5 {
                margin-bottom: -2.25rem !important;
            }

            .ml-lg-n5,
            .mx-lg-n5 {
                margin-left: -2.25rem !important;
            }

            .m-lg-n6 {
                margin: -4.5rem !important;
            }

            .mt-lg-n6,
            .my-lg-n6 {
                margin-top: -4.5rem !important;
            }

            .mr-lg-n6,
            .mx-lg-n6 {
                margin-right: -4.5rem !important;
            }

            .mb-lg-n6,
            .my-lg-n6 {
                margin-bottom: -4.5rem !important;
            }

            .ml-lg-n6,
            .mx-lg-n6 {
                margin-left: -4.5rem !important;
            }

            .m-lg-n7 {
                margin: -6.75rem !important;
            }

            .mt-lg-n7,
            .my-lg-n7 {
                margin-top: -6.75rem !important;
            }

            .mr-lg-n7,
            .mx-lg-n7 {
                margin-right: -6.75rem !important;
            }

            .mb-lg-n7,
            .my-lg-n7 {
                margin-bottom: -6.75rem !important;
            }

            .ml-lg-n7,
            .mx-lg-n7 {
                margin-left: -6.75rem !important;
            }

            .m-lg-n8 {
                margin: -13.5rem !important;
            }

            .mt-lg-n8,
            .my-lg-n8 {
                margin-top: -13.5rem !important;
            }

            .mr-lg-n8,
            .mx-lg-n8 {
                margin-right: -13.5rem !important;
            }

            .mb-lg-n8,
            .my-lg-n8 {
                margin-bottom: -13.5rem !important;
            }

            .ml-lg-n8,
            .mx-lg-n8 {
                margin-left: -13.5rem !important;
            }

            .m-lg-auto {
                margin: auto !important;
            }

            .mt-lg-auto,
            .my-lg-auto {
                margin-top: auto !important;
            }

            .mr-lg-auto,
            .mx-lg-auto {
                margin-right: auto !important;
            }

            .mb-lg-auto,
            .my-lg-auto {
                margin-bottom: auto !important;
            }

            .ml-lg-auto,
            .mx-lg-auto {
                margin-left: auto !important;
            }
        }

        @media (min-width: 1200px) {
            .m-xl-0 {
                margin: 0 !important;
            }

            .mt-xl-0,
            .my-xl-0 {
                margin-top: 0 !important;
            }

            .mr-xl-0,
            .mx-xl-0 {
                margin-right: 0 !important;
            }

            .mb-xl-0,
            .my-xl-0 {
                margin-bottom: 0 !important;
            }

            .ml-xl-0,
            .mx-xl-0 {
                margin-left: 0 !important;
            }

            .m-xl-1 {
                margin: 0.1875rem !important;
            }

            .mt-xl-1,
            .my-xl-1 {
                margin-top: 0.1875rem !important;
            }

            .mr-xl-1,
            .mx-xl-1 {
                margin-right: 0.1875rem !important;
            }

            .mb-xl-1,
            .my-xl-1 {
                margin-bottom: 0.1875rem !important;
            }

            .ml-xl-1,
            .mx-xl-1 {
                margin-left: 0.1875rem !important;
            }

            .m-xl-2 {
                margin: 0.375rem !important;
            }

            .mt-xl-2,
            .my-xl-2 {
                margin-top: 0.375rem !important;
            }

            .mr-xl-2,
            .mx-xl-2 {
                margin-right: 0.375rem !important;
            }

            .mb-xl-2,
            .my-xl-2 {
                margin-bottom: 0.375rem !important;
            }

            .ml-xl-2,
            .mx-xl-2 {
                margin-left: 0.375rem !important;
            }

            .m-xl-3 {
                margin: 0.75rem !important;
            }

            .mt-xl-3,
            .my-xl-3 {
                margin-top: 0.75rem !important;
            }

            .mr-xl-3,
            .mx-xl-3 {
                margin-right: 0.75rem !important;
            }

            .mb-xl-3,
            .my-xl-3 {
                margin-bottom: 0.75rem !important;
            }

            .ml-xl-3,
            .mx-xl-3 {
                margin-left: 0.75rem !important;
            }

            .m-xl-4 {
                margin: 1.5rem !important;
            }

            .mt-xl-4,
            .my-xl-4 {
                margin-top: 1.5rem !important;
            }

            .mr-xl-4,
            .mx-xl-4 {
                margin-right: 1.5rem !important;
            }

            .mb-xl-4,
            .my-xl-4 {
                margin-bottom: 1.5rem !important;
            }

            .ml-xl-4,
            .mx-xl-4 {
                margin-left: 1.5rem !important;
            }

            .m-xl-5 {
                margin: 2.25rem !important;
            }

            .mt-xl-5,
            .my-xl-5 {
                margin-top: 2.25rem !important;
            }

            .mr-xl-5,
            .mx-xl-5 {
                margin-right: 2.25rem !important;
            }

            .mb-xl-5,
            .my-xl-5 {
                margin-bottom: 2.25rem !important;
            }

            .ml-xl-5,
            .mx-xl-5 {
                margin-left: 2.25rem !important;
            }

            .m-xl-6 {
                margin: 4.5rem !important;
            }

            .mt-xl-6,
            .my-xl-6 {
                margin-top: 4.5rem !important;
            }

            .mr-xl-6,
            .mx-xl-6 {
                margin-right: 4.5rem !important;
            }

            .mb-xl-6,
            .my-xl-6 {
                margin-bottom: 4.5rem !important;
            }

            .ml-xl-6,
            .mx-xl-6 {
                margin-left: 4.5rem !important;
            }

            .m-xl-7 {
                margin: 6.75rem !important;
            }

            .mt-xl-7,
            .my-xl-7 {
                margin-top: 6.75rem !important;
            }

            .mr-xl-7,
            .mx-xl-7 {
                margin-right: 6.75rem !important;
            }

            .mb-xl-7,
            .my-xl-7 {
                margin-bottom: 6.75rem !important;
            }

            .ml-xl-7,
            .mx-xl-7 {
                margin-left: 6.75rem !important;
            }

            .m-xl-8 {
                margin: 13.5rem !important;
            }

            .mt-xl-8,
            .my-xl-8 {
                margin-top: 13.5rem !important;
            }

            .mr-xl-8,
            .mx-xl-8 {
                margin-right: 13.5rem !important;
            }

            .mb-xl-8,
            .my-xl-8 {
                margin-bottom: 13.5rem !important;
            }

            .ml-xl-8,
            .mx-xl-8 {
                margin-left: 13.5rem !important;
            }

            .p-xl-0 {
                padding: 0 !important;
            }

            .pt-xl-0,
            .py-xl-0 {
                padding-top: 0 !important;
            }

            .pr-xl-0,
            .px-xl-0 {
                padding-right: 0 !important;
            }

            .pb-xl-0,
            .py-xl-0 {
                padding-bottom: 0 !important;
            }

            .pl-xl-0,
            .px-xl-0 {
                padding-left: 0 !important;
            }

            .p-xl-1 {
                padding: 0.1875rem !important;
            }

            .pt-xl-1,
            .py-xl-1 {
                padding-top: 0.1875rem !important;
            }

            .pr-xl-1,
            .px-xl-1 {
                padding-right: 0.1875rem !important;
            }

            .pb-xl-1,
            .py-xl-1 {
                padding-bottom: 0.1875rem !important;
            }

            .pl-xl-1,
            .px-xl-1 {
                padding-left: 0.1875rem !important;
            }

            .p-xl-2 {
                padding: 0.375rem !important;
            }

            .pt-xl-2,
            .py-xl-2 {
                padding-top: 0.375rem !important;
            }

            .pr-xl-2,
            .px-xl-2 {
                padding-right: 0.375rem !important;
            }

            .pb-xl-2,
            .py-xl-2 {
                padding-bottom: 0.375rem !important;
            }

            .pl-xl-2,
            .px-xl-2 {
                padding-left: 0.375rem !important;
            }

            .p-xl-3 {
                padding: 0.75rem !important;
            }

            .pt-xl-3,
            .py-xl-3 {
                padding-top: 0.75rem !important;
            }

            .pr-xl-3,
            .px-xl-3 {
                padding-right: 0.75rem !important;
            }

            .pb-xl-3,
            .py-xl-3 {
                padding-bottom: 0.75rem !important;
            }

            .pl-xl-3,
            .px-xl-3 {
                padding-left: 0.75rem !important;
            }

            .p-xl-4 {
                padding: 1.5rem !important;
            }

            .pt-xl-4,
            .py-xl-4 {
                padding-top: 1.5rem !important;
            }

            .pr-xl-4,
            .px-xl-4 {
                padding-right: 1.5rem !important;
            }

            .pb-xl-4,
            .py-xl-4 {
                padding-bottom: 1.5rem !important;
            }

            .pl-xl-4,
            .px-xl-4 {
                padding-left: 1.5rem !important;
            }

            .p-xl-5 {
                padding: 2.25rem !important;
            }

            .pt-xl-5,
            .py-xl-5 {
                padding-top: 2.25rem !important;
            }

            .pr-xl-5,
            .px-xl-5 {
                padding-right: 2.25rem !important;
            }

            .pb-xl-5,
            .py-xl-5 {
                padding-bottom: 2.25rem !important;
            }

            .pl-xl-5,
            .px-xl-5 {
                padding-left: 2.25rem !important;
            }

            .p-xl-6 {
                padding: 4.5rem !important;
            }

            .pt-xl-6,
            .py-xl-6 {
                padding-top: 4.5rem !important;
            }

            .pr-xl-6,
            .px-xl-6 {
                padding-right: 4.5rem !important;
            }

            .pb-xl-6,
            .py-xl-6 {
                padding-bottom: 4.5rem !important;
            }

            .pl-xl-6,
            .px-xl-6 {
                padding-left: 4.5rem !important;
            }

            .p-xl-7 {
                padding: 6.75rem !important;
            }

            .pt-xl-7,
            .py-xl-7 {
                padding-top: 6.75rem !important;
            }

            .pr-xl-7,
            .px-xl-7 {
                padding-right: 6.75rem !important;
            }

            .pb-xl-7,
            .py-xl-7 {
                padding-bottom: 6.75rem !important;
            }

            .pl-xl-7,
            .px-xl-7 {
                padding-left: 6.75rem !important;
            }

            .p-xl-8 {
                padding: 13.5rem !important;
            }

            .pt-xl-8,
            .py-xl-8 {
                padding-top: 13.5rem !important;
            }

            .pr-xl-8,
            .px-xl-8 {
                padding-right: 13.5rem !important;
            }

            .pb-xl-8,
            .py-xl-8 {
                padding-bottom: 13.5rem !important;
            }

            .pl-xl-8,
            .px-xl-8 {
                padding-left: 13.5rem !important;
            }

            .m-xl-n1 {
                margin: -0.1875rem !important;
            }

            .mt-xl-n1,
            .my-xl-n1 {
                margin-top: -0.1875rem !important;
            }

            .mr-xl-n1,
            .mx-xl-n1 {
                margin-right: -0.1875rem !important;
            }

            .mb-xl-n1,
            .my-xl-n1 {
                margin-bottom: -0.1875rem !important;
            }

            .ml-xl-n1,
            .mx-xl-n1 {
                margin-left: -0.1875rem !important;
            }

            .m-xl-n2 {
                margin: -0.375rem !important;
            }

            .mt-xl-n2,
            .my-xl-n2 {
                margin-top: -0.375rem !important;
            }

            .mr-xl-n2,
            .mx-xl-n2 {
                margin-right: -0.375rem !important;
            }

            .mb-xl-n2,
            .my-xl-n2 {
                margin-bottom: -0.375rem !important;
            }

            .ml-xl-n2,
            .mx-xl-n2 {
                margin-left: -0.375rem !important;
            }

            .m-xl-n3 {
                margin: -0.75rem !important;
            }

            .mt-xl-n3,
            .my-xl-n3 {
                margin-top: -0.75rem !important;
            }

            .mr-xl-n3,
            .mx-xl-n3 {
                margin-right: -0.75rem !important;
            }

            .mb-xl-n3,
            .my-xl-n3 {
                margin-bottom: -0.75rem !important;
            }

            .ml-xl-n3,
            .mx-xl-n3 {
                margin-left: -0.75rem !important;
            }

            .m-xl-n4 {
                margin: -1.5rem !important;
            }

            .mt-xl-n4,
            .my-xl-n4 {
                margin-top: -1.5rem !important;
            }

            .mr-xl-n4,
            .mx-xl-n4 {
                margin-right: -1.5rem !important;
            }

            .mb-xl-n4,
            .my-xl-n4 {
                margin-bottom: -1.5rem !important;
            }

            .ml-xl-n4,
            .mx-xl-n4 {
                margin-left: -1.5rem !important;
            }

            .m-xl-n5 {
                margin: -2.25rem !important;
            }

            .mt-xl-n5,
            .my-xl-n5 {
                margin-top: -2.25rem !important;
            }

            .mr-xl-n5,
            .mx-xl-n5 {
                margin-right: -2.25rem !important;
            }

            .mb-xl-n5,
            .my-xl-n5 {
                margin-bottom: -2.25rem !important;
            }

            .ml-xl-n5,
            .mx-xl-n5 {
                margin-left: -2.25rem !important;
            }

            .m-xl-n6 {
                margin: -4.5rem !important;
            }

            .mt-xl-n6,
            .my-xl-n6 {
                margin-top: -4.5rem !important;
            }

            .mr-xl-n6,
            .mx-xl-n6 {
                margin-right: -4.5rem !important;
            }

            .mb-xl-n6,
            .my-xl-n6 {
                margin-bottom: -4.5rem !important;
            }

            .ml-xl-n6,
            .mx-xl-n6 {
                margin-left: -4.5rem !important;
            }

            .m-xl-n7 {
                margin: -6.75rem !important;
            }

            .mt-xl-n7,
            .my-xl-n7 {
                margin-top: -6.75rem !important;
            }

            .mr-xl-n7,
            .mx-xl-n7 {
                margin-right: -6.75rem !important;
            }

            .mb-xl-n7,
            .my-xl-n7 {
                margin-bottom: -6.75rem !important;
            }

            .ml-xl-n7,
            .mx-xl-n7 {
                margin-left: -6.75rem !important;
            }

            .m-xl-n8 {
                margin: -13.5rem !important;
            }

            .mt-xl-n8,
            .my-xl-n8 {
                margin-top: -13.5rem !important;
            }

            .mr-xl-n8,
            .mx-xl-n8 {
                margin-right: -13.5rem !important;
            }

            .mb-xl-n8,
            .my-xl-n8 {
                margin-bottom: -13.5rem !important;
            }

            .ml-xl-n8,
            .mx-xl-n8 {
                margin-left: -13.5rem !important;
            }

            .m-xl-auto {
                margin: auto !important;
            }

            .mt-xl-auto,
            .my-xl-auto {
                margin-top: auto !important;
            }

            .mr-xl-auto,
            .mx-xl-auto {
                margin-right: auto !important;
            }

            .mb-xl-auto,
            .my-xl-auto {
                margin-bottom: auto !important;
            }

            .ml-xl-auto,
            .mx-xl-auto {
                margin-left: auto !important;
            }
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            pointer-events: auto;
            content: "";
            background-color: rgba(0, 0, 0, 0);
        }

        .text-monospace {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
        }

        .text-justify {
            text-align: justify !important;
        }

        .text-wrap {
            white-space: normal !important;
        }

        .text-nowrap {
            white-space: nowrap !important;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .text-left {
            text-align: left !important;
        }

        .text-right {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        @media (min-width: 576px) {
            .text-sm-left {
                text-align: left !important;
            }

            .text-sm-right {
                text-align: right !important;
            }

            .text-sm-center {
                text-align: center !important;
            }
        }

        @media (min-width: 768px) {
            .text-md-left {
                text-align: left !important;
            }

            .text-md-right {
                text-align: right !important;
            }

            .text-md-center {
                text-align: center !important;
            }
        }

        @media (min-width: 992px) {
            .text-lg-left {
                text-align: left !important;
            }

            .text-lg-right {
                text-align: right !important;
            }

            .text-lg-center {
                text-align: center !important;
            }
        }

        @media (min-width: 1200px) {
            .text-xl-left {
                text-align: left !important;
            }

            .text-xl-right {
                text-align: right !important;
            }

            .text-xl-center {
                text-align: center !important;
            }
        }

        .text-lowercase {
            text-transform: lowercase !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .text-capitalize {
            text-transform: capitalize !important;
        }

        .font-weight-light {
            font-weight: 400 !important;
        }

        .font-weight-lighter {
            font-weight: lighter !important;
        }

        .font-weight-normal {
            font-weight: 400 !important;
        }

        .font-weight-bold {
            font-weight: 600 !important;
        }

        .font-weight-bolder {
            font-weight: bolder !important;
        }

        .font-italic {
            font-style: italic !important;
        }

        .text-white {
            color: #fff !important;
        }

        .text-primary {
            color: #ff7276 !important;
        }

        .text-primary-dark {
            color: #3a042e !important;
        }

        a.text-primary:focus,
        a.text-primary:hover {
            color: #3a042e !important;
        }

        .text-secondary {
            color: #6e84a3 !important;
        }

        a.text-secondary:focus,
        a.text-secondary:hover {
            color: #4c5f78 !important;
        }

        .text-success {
            color: #00d97e !important;
        }

        a.text-success:focus,
        a.text-success:hover {
            color: #008d52 !important;
        }

        .text-info {
            color: #39afd1 !important;
        }

        a.text-info:focus,
        a.text-info:hover {
            color: #247f9a !important;
        }

        .text-warning {
            color: #f6c343 !important;
        }

        a.text-warning:focus,
        a.text-warning:hover {
            color: #e2a40b !important;
        }

        .text-danger {
            color: #e63757 !important;
        }

        a.text-danger:focus,
        a.text-danger:hover {
            color: #b91735 !important;
        }

        .text-light {
            color: #edf2f9 !important;
        }

        a.text-light:focus,
        a.text-light:hover {
            color: #b4c9e6 !important;
        }

        .text-dark {
            color: #12263f !important;
        }

        a.text-dark:focus,
        a.text-dark:hover {
            color: #010204 !important;
        }

        .text-white {
            color: #fff !important;
        }

        a.text-white:focus,
        a.text-white:hover {
            color: #d9d9d9 !important;
        }

        .text-body {
            color: #12263f !important;
        }

        .text-muted {
            color: #95aac9 !important;
        }

        .text-black-50 {
            color: rgba(18, 38, 63, 0.5) !important;
        }

        .text-white-50 {
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        .text-break {
            word-break: break-word !important;
            word-wrap: break-word !important;
        }

        .text-reset {
            color: inherit !important;
        }

        .visible {
            visibility: visible !important;
        }

        .invisible {
            visibility: hidden !important;
        }

        @media print {
            *,
            ::after,
            ::before {
                text-shadow: none !important;
                box-shadow: none !important;
            }

            a:not(.btn) {
                text-decoration: underline;
            }

            abbr[title]::after {
                content: " (" attr(title) ")";
            }

            pre {
                white-space: pre-wrap !important;
            }

            blockquote,
            pre {
                border: 1px solid #b1c2d9;
                page-break-inside: avoid;
            }

            thead {
                display: table-header-group;
            }

            img,
            tr {
                page-break-inside: avoid;
            }

            h2,
            h3,
            p {
                orphans: 3;
                widows: 3;
            }

            h2,
            h3 {
                page-break-after: avoid;
            }

            @page {
                size: a3;
            }

            body {
                min-width: 992px !important;
            }

            .container {
                min-width: 992px !important;
            }

            .navbar {
                display: none;
            }

            .badge {
                border: 1px solid #12263f;
            }

            .table {
                border-collapse: collapse !important;
            }

            .table td,
            .table th {
                background-color: #fff !important;
            }

            .table-bordered td,
            .table-bordered th {
                border: 1px solid #e3ebf6 !important;
            }

            .table-dark {
                color: inherit;
            }

            .table-dark tbody + tbody,
            .table-dark td,
            .table-dark th,
            .table-dark thead th {
                border-color: #edf2f9;
            }

            .table .thead-dark th {
                color: inherit;
                border-color: #edf2f9;
            }
        }

        .badge {
            vertical-align: middle;
        }

        .btn .badge {
            top: -2px;
        }

        .alert-primary,
        .badge-soft-primary {
            color: #2c7be5;
            background-color: #d5e5fa;
        }

        .alert-primary,
        .badge-soft-primary[href]:focus,
        .alert-primary,
        .badge-soft-primary[href]:hover {
            color: #2c7be5;
            text-decoration: none;
            background-color: #bed7f7;
        }

        .badge-soft-secondary {
            color: #6e84a3;
            background-color: #e2e6ed;
        }

        .badge-soft-secondary[href]:focus,
        .badge-soft-secondary[href]:hover {
            color: #6e84a3;
            text-decoration: none;
            background-color: #d2d8e3;
        }

        .badge-soft-success {
            color: #00d97e;
            background-color: #ccf7e5;
        }

        .badge-soft-success[href]:focus,
        .badge-soft-success[href]:hover {
            color: #00d97e;
            text-decoration: none;
            background-color: #b6f4da;
        }

        .badge-soft-info {
            color: #39afd1;
            background-color: #d7eff6;
        }

        .badge-soft-info[href]:focus,
        .badge-soft-info[href]:hover {
            color: #39afd1;
            text-decoration: none;
            background-color: #c2e7f1;
        }

        .badge-soft-warning {
            color: #f6c343;
            background-color: #fdf3d9;
        }

        .badge-soft-warning[href]:focus,
        .badge-soft-warning[href]:hover {
            color: #f6c343;
            text-decoration: none;
            background-color: #fcebc1;
        }

        .badge-soft-danger {
            color: #e63757;
            background-color: #fad7dd;
        }

        .badge-soft-danger[href]:focus,
        .badge-soft-danger[href]:hover {
            color: #e63757;
            text-decoration: none;
            background-color: #f7c0ca;
        }

        .badge-soft-light {
            color: #edf2f9;
            background-color: #fbfcfe;
        }

        .badge-soft-light[href]:focus,
        .badge-soft-light[href]:hover {
            color: #edf2f9;
            text-decoration: none;
            background-color: #e7edf9;
        }

        .badge-soft-dark {
            color: #12263f;
            background-color: #d0d4d9;
        }

        .badge-soft-dark[href]:focus,
        .badge-soft-dark[href]:hover {
            color: #12263f;
            text-decoration: none;
            background-color: #c2c7ce;
        }

        .badge-soft-white {
            color: #fff;
            background-color: #fff;
        }

        .badge-soft-white[href]:focus,
        .badge-soft-white[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #f2f2f2;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            width: 0.3rem;
            height: 0.6rem;
            margin-right: 0.5rem;
            -webkit-mask: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxMHB4IiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9IjAgMCAxMCAxNiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4gICAgICAgIDx0aXRsZT5TaGFwZTwvdGl0bGU+ICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPiAgICA8ZGVmcz48L2RlZnM+ICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+ICAgICAgICA8ZyBpZD0iY2hldnJvbi1yaWdodCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMi4wMDAwMDAsIDIuMDAwMDAwKSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIuNSI+ICAgICAgICAgICAgPHBvbHlsaW5lIGlkPSJTaGFwZSIgcG9pbnRzPSIwIDEyIDYgNiAwIDAiPjwvcG9seWxpbmU+ICAgICAgICA8L2c+ICAgIDwvZz48L3N2Zz4=) no-repeat 50% 50%;
            mask: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSIxMHB4IiBoZWlnaHQ9IjE2cHgiIHZpZXdCb3g9IjAgMCAxMCAxNiIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4gICAgICAgIDx0aXRsZT5TaGFwZTwvdGl0bGU+ICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPiAgICA8ZGVmcz48L2RlZnM+ICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+ICAgICAgICA8ZyBpZD0iY2hldnJvbi1yaWdodCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMi4wMDAwMDAsIDIuMDAwMDAwKSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIuNSI+ICAgICAgICAgICAgPHBvbHlsaW5lIGlkPSJTaGFwZSIgcG9pbnRzPSIwIDEyIDYgNiAwIDAiPjwvcG9seWxpbmU+ICAgICAgICA8L2c+ICAgIDwvZz48L3N2Zz4=) no-repeat 50% 50%;
            -webkit-mask-size: contain;
            mask-size: contain;
            background: #d2ddec;
        }

        .breadcrumb-sm {
            font-size: 0.8125rem;
        }

        .breadcrumb-overflow {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            overflow-x: auto;
        }

        .breadcrumb-overflow::-webkit-scrollbar {
            display: none;
        }

        .breadcrumb-overflow .breadcrumb-item {
            white-space: nowrap;
        }

        .btn-white {
            border-color: transparent;
            color: #ff7276;
        }

        .btn-white:focus,
        .btn-white:hover {
            background-color: transparent;
            border-color: transparent;
            color: #ff7276 !important;
        }

        .btn-group-toggle .btn-white:not(:disabled):not(.disabled).active,
        .btn-group-toggle .btn-white:not(:disabled):not(.disabled):active {
            background-color: #fff;
            border-color: #2c7be5;
            color: #2c7be5;
        }

        .btn-group-toggle .btn-white.focus,
        .btn-group-toggle .btn-white:focus {
            box-shadow: none;
        }

        .btn-white-20 {
            background-color: rgba(255, 255, 255, 0.2);
            border-color: transparent;
            color: #fff;
        }

        .btn-white-20:focus,
        .btn-white-20:hover {
            background-color: rgba(255, 255, 255, 0.12);
            border-color: transparent;
            color: #fff;
        }

        .btn-outline-secondary:not(:hover):not([aria-expanded="true"]):not([aria-pressed="true"]) {
            border-color: #d2ddec;
        }

        .btn-rounded-circle {
            width: calc(1em * 1.5 + 1rem + 1px * 2);
            padding-left: 0;
            padding-right: 0;
            border-radius: 50%;
        }

        .btn-group-lg > .btn-rounded-circle.btn,
        .btn-rounded-circle.btn-lg {
            width: calc(1em * 1.5 + 1.5rem + 1px * 2);
        }

        .btn-group-sm > .btn-rounded-circle.btn,
        .btn-rounded-circle.btn-sm {
            width: calc(1em * 1.75 + 0.25rem + 1px * 2);
        }

        .btn-group .btn + .btn {
            margin-left: 0;
        }

        .card {
            margin-bottom: 1.5rem;
            border-color: #edf2f9;
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        }

        .card > * {
            flex-shrink: 0;
        }

        .card-header {
            display: flex;
            flex-direction: row;
            align-items: center;
            height: 60px;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .card-header > :first-child {
            flex: 1;
        }

        .card-header + .card-footer {
            border-top-width: 0;
        }

        .card-title {
            margin-bottom: 0.5rem;
        }

        .card-header-title {
            margin-bottom: 0;
        }

        .card-header-tabs {
            margin-top: -0.5rem;
            margin-bottom: -0.5rem;
            margin-left: 0;
            margin-right: 0;
        }

        .card-header-tabs .nav-link {
            padding-top: calc((60px - 1em * 1.5) / 2) !important;
            padding-bottom: calc((60px - 1em * 1.5) / 2) !important;
        }

        .card-table {
            margin-bottom: 0;
        }

        .card-table thead th {
            border-top-width: 0;
        }

        .card-table tbody td:first-child,
        .card-table thead th:first-child {
            padding-left: 1.5rem !important;
        }

        .card-table tbody td:last-child,
        .card-table thead th:last-child {
            padding-right: 1.5rem !important;
        }

        .card > .card-table:first-child > tbody:first-child > tr:first-child > td:first-child,
        .card > .card-table:first-child > tbody:first-child > tr:first-child > th:first-child,
        .card > .card-table:first-child > tfoot:first-child > tr:first-child > td:first-child,
        .card > .card-table:first-child > tfoot:first-child > tr:first-child > th:first-child,
        .card > .card-table:first-child > thead:first-child > tr:first-child > td:first-child,
        .card > .card-table:first-child > thead:first-child > tr:first-child > th:first-child,
        .card > .table-responsive:first-child > .card-table > tbody:first-child > tr:first-child > td:first-child,
        .card > .table-responsive:first-child > .card-table > tbody:first-child > tr:first-child > th:first-child,
        .card > .table-responsive:first-child > .card-table > tfoot:first-child > tr:first-child > td:first-child,
        .card > .table-responsive:first-child > .card-table > tfoot:first-child > tr:first-child > th:first-child,
        .card > .table-responsive:first-child > .card-table > thead:first-child > tr:first-child > td:first-child,
        .card > .table-responsive:first-child > .card-table > thead:first-child > tr:first-child > th:first-child {
            border-top-left-radius: 0.5rem;
        }

        .card > .card-table:first-child > tbody:first-child > tr:first-child > td:last-child,
        .card > .card-table:first-child > tbody:first-child > tr:first-child > th:last-child,
        .card > .card-table:first-child > tfoot:first-child > tr:first-child > td:last-child,
        .card > .card-table:first-child > tfoot:first-child > tr:first-child > th:last-child,
        .card > .card-table:first-child > thead:first-child > tr:first-child > td:last-child,
        .card > .card-table:first-child > thead:first-child > tr:first-child > th:last-child,
        .card > .table-responsive:first-child > .card-table > tbody:first-child > tr:first-child > td:last-child,
        .card > .table-responsive:first-child > .card-table > tbody:first-child > tr:first-child > th:last-child,
        .card > .table-responsive:first-child > .card-table > tfoot:first-child > tr:first-child > td:last-child,
        .card > .table-responsive:first-child > .card-table > tfoot:first-child > tr:first-child > th:last-child,
        .card > .table-responsive:first-child > .card-table > thead:first-child > tr:first-child > td:last-child,
        .card > .table-responsive:first-child > .card-table > thead:first-child > tr:first-child > th:last-child {
            border-top-right-radius: 0.5rem;
        }

        .card-avatar {
            display: block !important;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 1rem;
        }

        .card-avatar-top {
            margin-top: -3rem;
        }

        .card-avatar-top.avatar-xs {
            margin-top: -2.3125rem;
        }

        .card-avatar-top.avatar-sm {
            margin-top: -2.75rem;
        }

        .card-avatar-top.avatar-lg {
            margin-top: -3.5rem;
        }

        .card-avatar-top.avatar-xl {
            margin-top: -4.0625rem;
        }

        .card-avatar-top.avatar-xxl {
            margin-top: -5.5rem;
        }

        .card-dropdown {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
        }

        .card-inactive {
            border-color: #e3ebf6;
            border-style: dashed;
            background-color: transparent;
            box-shadow: none;
        }

        .card-flush {
            background: 0 0;
            border: none;
            box-shadow: none;
        }

        .card-sm .card-body,
        .card-sm .card-footer-boxed {
            padding: 1rem;
        }

        .card-header-flush {
            border-bottom: 0;
        }

        .card-header-flush + .card-body {
            padding-top: 0;
        }

        .card-fill {
            height: calc(100% - 1.5rem);
        }

        .card-fill .card-body {
            flex-grow: 0;
            margin-top: auto;
            margin-bottom: auto;
        }

        .card-fill-xs {
            height: calc(100% - 1.5rem);
        }

        .card-fill-xs .card-body {
            flex-grow: 0;
            margin-top: auto;
            margin-bottom: auto;
        }

        @media (min-width: 576px) {
            .card-fill-sm {
                height: calc(100% - 1.5rem);
            }

            .card-fill-sm .card-body {
                flex-grow: 0;
                margin-top: auto;
                margin-bottom: auto;
            }
        }

        @media (min-width: 768px) {
            .card-fill-md {
                height: calc(100% - 1.5rem);
            }

            .card-fill-md .card-body {
                flex-grow: 0;
                margin-top: auto;
                margin-bottom: auto;
            }
        }

        @media (min-width: 992px) {
            .card-fill-lg {
                height: calc(100% - 1.5rem);
            }

            .card-fill-lg .card-body {
                flex-grow: 0;
                margin-top: auto;
                margin-bottom: auto;
            }
        }

        @media (min-width: 1200px) {
            .card-fill-xl {
                height: calc(100% - 1.5rem);
            }

            .card-fill-xl .card-body {
                flex-grow: 0;
                margin-top: auto;
                margin-bottom: auto;
            }
        }

        .card-adjust {
            height: 0;
            min-height: 100%;
        }

        .card-adjust .card {
            height: calc(100% - 1.5rem);
        }

        .card-adjust .card-body {
            height: calc(100% - 60px);
            overflow-y: auto;
        }

        .card-adjust-xs {
            height: 0;
            min-height: 100%;
        }

        .card-adjust-xs .card {
            height: calc(100% - 1.5rem);
        }

        .card-adjust-xs .card-body {
            height: calc(100% - 60px);
            overflow-y: auto;
        }

        @media (min-width: 576px) {
            .card-adjust-sm {
                height: 0;
                min-height: 100%;
            }

            .card-adjust-sm .card {
                height: calc(100% - 1.5rem);
            }

            .card-adjust-sm .card-body {
                height: calc(100% - 60px);
                overflow-y: auto;
            }
        }

        @media (min-width: 768px) {
            .card-adjust-md {
                height: 0;
                min-height: 100%;
            }

            .card-adjust-md .card {
                height: calc(100% - 1.5rem);
            }

            .card-adjust-md .card-body {
                height: calc(100% - 60px);
                overflow-y: auto;
            }
        }

        @media (min-width: 992px) {
            .card-adjust-lg {
                height: 0;
                min-height: 100%;
            }

            .card-adjust-lg .card {
                height: calc(100% - 1.5rem);
            }

            .card-adjust-lg .card-body {
                height: calc(100% - 60px);
                overflow-y: auto;
            }
        }

        @media (min-width: 1200px) {
            .card-adjust-xl {
                height: 0;
                min-height: 100%;
            }

            .card-adjust-xl .card {
                height: calc(100% - 1.5rem);
            }

            .card-adjust-xl .card-body {
                height: calc(100% - 60px);
                overflow-y: auto;
            }
        }

        .card-footer-boxed {
            padding-right: 0;
            padding-bottom: 1.5rem;
            padding-left: 0;
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }

        .card-pagination.pagination-tabs {
            margin-top: -1rem;
            margin-bottom: -1rem;
            border: 0;
        }

        .card-pagination.pagination-tabs .page,
        .card-pagination.pagination-tabs .page-link {
            border-top-width: 0 !important;
        }

        .card-pagination.pagination-tabs .active .page,
        .card-pagination.pagination-tabs .active .page-link {
            border-width: 0 0 1px 0 !important;
        }

        .card-divider {
            border-color: #edf2f9;
        }

        .close-sm {
            font-size: 0.9375rem;
        }

        .highlight {
            padding: 0;
        }

        .custom-switch {
            min-height: 1.5rem;
        }

        .custom-switch .custom-control-label::before {
            top: 0;
            height: 1.5rem;
            border-radius: 0.75rem;
        }

        .custom-switch .custom-control-label::after {
            top: 0.1875rem;
            left: -3.3125rem;
            background-color: #fff;
        }

        .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
            background-color: #fff;
            transform: translateX(1.5rem);
        }

        .custom-select-sm {
            line-height: 1.75;
        }

        .custom-control-circle {
            padding-left: 1.875rem;
        }

        .custom-control-circle .custom-control-label::after,
        .custom-control-circle .custom-control-label::before {
            top: 0.01563rem;
            left: -1.875rem;
            width: 1.375rem;
            height: 1.375rem;
            border-radius: 50%;
        }

        .custom-control-circle .custom-control-input:checked ~ .custom-control-label::after,
        .custom-control-circle .custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 12 9' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M11.3333 1L3.99996 8.33333L0.666626 5' stroke='%23FFFFFF' stroke-width='1.33333' stroke-linecap='round' stroke-linejoin='round'/%3e%3c/svg%3e");
            background-size: 0.75rem 0.5625rem;
        }

        .dropdown-toggle::after {
            width: auto;
            height: auto;
            border: none !important;
            vertical-align: middle;
            font-family: Feather;
        }

        .dropdown-toggle::after {
            content: "\e92e";
        }

        .dropup > .dropdown-toggle::after {
            content: "\e931";
        }

        .dropright > .dropdown-toggle::after {
            content: "\e930";
        }

        .dropleft > .dropdown-toggle::before {
            content: "\e92f";
            width: auto;
            height: auto;
            border: none !important;
            vertical-align: middle;
            font-family: Feather;
        }

        .dropdown-item.dropdown-toggle {
            display: flex;
            justify-content: space-between;
        }

        .dropdown-menu {
            -webkit-animation: dropdownMenu 0.15s;
            animation: dropdownMenu 0.15s;
        }

        @-webkit-keyframes dropdownMenu {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes dropdownMenu {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .dropdown-ellipses {
            font-size: 1.0625rem;
            color: #d2ddec;
        }

        .dropdown-ellipses::after {
            display: none;
        }

        .dropdown-menu-card {
            min-width: 350px;
            padding-top: 0;
            padding-bottom: 0;
            background-color: #fff;
            border-color: rgba(18, 38, 63, 0.1);
        }

        .dropdown-menu-card .card-header {
            min-height: 3.125rem;
        }

        .dropdown-menu-card .card-body {
            max-height: 350px;
            overflow-y: auto;
        }

        .dropdown-menu-sm {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            font-size: 0.8125rem;
        }

        .dropdown-menu-sm .dropdown-item {
            padding: 0.1875rem 0.75rem;
        }

        .form-text {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        .form-control.is-invalid:focus,
        .form-control.is-valid:focus,
        .was-validated .form-control:invalid:focus,
        .was-validated .form-control:valid:focus {
            box-shadow: none;
        }

        .form-control-flush {
            padding-left: 0;
            border-color: transparent !important;
            background-color: transparent !important;
            resize: none;
        }

        .form-control:not(.custom-select) {
            padding-right: 0;
        }

        .form-control-auto {
            height: auto;
            padding-top: 0;
            padding-bottom: 0;
        }

        .form-control-rounded {
            border-radius: 20rem;
        }

        .input-group.input-group-merge > .form-control {
            border-radius: 0.375rem;
        }

        .input-group.input-group-merge > .form-control:focus {
            box-shadow: none;
        }

        .input-group.input-group-merge > .form-control:focus ~ [class*="input-group"] > .input-group-text {
            border-color: #2c7be5;
        }

        .input-group.input-group-merge > .form-control.is-valid ~ [class*="input-group"] > .input-group-text {
            border-color: #00d97e;
        }

        .input-group.input-group-merge > .form-control.is-invalid ~ [class*="input-group"] > .input-group-text {
            border-color: #e63757;
        }

        .input-group.input-group-merge > .form-control-prepended {
            padding-left: 0.375rem;
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
            border-left-width: 0;
        }

        .input-group.input-group-merge > .form-control-appended {
            padding-right: 0.375rem;
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
            border-right-width: 0;
        }

        .input-group.input-group-merge > .input-group-prepend {
            order: -1;
        }

        .input-group.input-group-merge > .input-group-prepend > .input-group-text {
            padding-right: 0.375rem;
            border-top-left-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
            border-right-width: 0;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .input-group.input-group-merge > .input-group-append > .input-group-text {
            padding-left: 0.375rem;
            border-top-right-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
            border-left-width: 0;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .input-group-lg.input-group-merge > .form-control {
            border-radius: 0.5rem;
        }

        .input-group-lg.input-group-merge > .form-control-prepended {
            padding-left: 0.625rem;
        }

        .input-group-lg.input-group-merge > .form-control-appended {
            padding-right: 0.625rem;
        }

        .input-group-lg.input-group-merge > .input-group-prepend > .input-group-text {
            padding-right: 0.625rem;
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }

        .input-group-lg.input-group-merge > .input-group-append > .input-group-text {
            padding-left: 0.625rem;
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }

        .input-group-sm.input-group-merge > .form-control {
            border-radius: 0.25rem;
        }

        .input-group-sm.input-group-merge > .form-control-prepended {
            padding-left: 0.25rem;
        }

        .input-group-sm.input-group-merge > .form-control-appended {
            padding-right: 0.25rem;
        }

        .input-group-sm.input-group-merge > .input-group-prepend > .input-group-text {
            padding-right: 0.25rem;
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .input-group-sm.input-group-merge > .input-group-append > .input-group-text {
            padding-left: 0.25rem;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        .input-group-rounded.input-group-merge > .form-control {
            border-radius: 20rem;
        }

        .input-group-rounded.input-group-merge > .input-group-prepend > .input-group-text {
            border-top-left-radius: 20rem;
            border-bottom-left-radius: 20rem;
        }

        .input-group-rounded.input-group-merge > .input-group-append > .input-group-text {
            border-top-right-radius: 20rem;
            border-bottom-right-radius: 20rem;
        }

        .input-group-flush > .form-control {
            padding-top: 0;
            padding-bottom: 0;
            border-color: transparent !important;
            background-color: transparent !important;
        }

        .input-group-flush > .input-group-append > .input-group-text,
        .input-group-flush > .input-group-prepend > .input-group-text {
            padding: 0;
            border-width: 0;
            background-color: transparent;
        }

        .form-control.h1,
        .form-control.h2,
        .form-control.h3,
        .form-control.h4,
        .form-control.h5 {
            margin-bottom: 0;
            font-weight: 500;
            letter-spacing: -0.02em;
        }

        .form-control.h1 {
            font-size: 1.625rem;
        }

        .form-control.h2 {
            font-size: 1.25rem;
        }

        .form-control.h3 {
            font-size: 1.0625rem;
        }

        .form-control.h4 {
            font-size: 0.9375rem;
        }

        .form-control.h5 {
            font-size: 0.8125rem;
        }

        .jumbotron {
            padding: 1rem;
        }

        @media (min-width: 576px) {
            .jumbotron {
                padding: 2rem;
            }
        }

        .list-group-item-primary {
            color: #fff;
            background-color: #2c7be5;
        }

        .list-group-item-primary.list-group-item-action:focus,
        .list-group-item-primary.list-group-item-action:hover {
            color: #fff;
            background-color: #1b6edc;
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #fff;
            border-color: #fff;
        }

        .list-group-item-secondary {
            color: #fff;
            background-color: #6e84a3;
        }

        .list-group-item-secondary.list-group-item-action:focus,
        .list-group-item-secondary.list-group-item-action:hover {
            color: #fff;
            background-color: #607797;
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #fff;
            border-color: #fff;
        }

        .list-group-item-success {
            color: #fff;
            background-color: #00d97e;
        }

        .list-group-item-success.list-group-item-action:focus,
        .list-group-item-success.list-group-item-action:hover {
            color: #fff;
            background-color: #00c06f;
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #fff;
            border-color: #fff;
        }

        .list-group-item-info {
            color: #fff;
            background-color: #39afd1;
        }

        .list-group-item-info.list-group-item-action:focus,
        .list-group-item-info.list-group-item-action:hover {
            color: #fff;
            background-color: #2da2c3;
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #fff;
            border-color: #fff;
        }

        .list-group-item-warning {
            color: #283e59;
            background-color: #f6c343;
        }

        .list-group-item-warning.list-group-item-action:focus,
        .list-group-item-warning.list-group-item-action:hover {
            color: #283e59;
            background-color: #f5bb2b;
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #283e59;
            border-color: #283e59;
        }

        .list-group-item-danger {
            color: #fff;
            background-color: #e63757;
        }

        .list-group-item-danger.list-group-item-action:focus,
        .list-group-item-danger.list-group-item-action:hover {
            color: #fff;
            background-color: #e32044;
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #fff;
            border-color: #fff;
        }

        .list-group-item-light {
            color: #283e59;
            background-color: #edf2f9;
        }

        .list-group-item-light.list-group-item-action:focus,
        .list-group-item-light.list-group-item-action:hover {
            color: #283e59;
            background-color: #dae4f3;
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #283e59;
            border-color: #283e59;
        }

        .list-group-item-dark {
            color: #fff;
            background-color: #12263f;
        }

        .list-group-item-dark.list-group-item-action:focus,
        .list-group-item-dark.list-group-item-action:hover {
            color: #fff;
            background-color: #0c1a2b;
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #fff;
            border-color: #fff;
        }

        .list-group-item-white {
            color: #283e59;
            background-color: #fff;
        }

        .list-group-item-white.list-group-item-action:focus,
        .list-group-item-white.list-group-item-action:hover {
            color: #283e59;
            background-color: #f2f2f2;
        }

        .list-group-item-white.list-group-item-action.active {
            color: #fff;
            background-color: #283e59;
            border-color: #283e59;
        }

        .list-group-lg .list-group-item {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .list-group-flush > .list-group-item {
            padding-left: 0;
            padding-right: 0;
        }

        .list-group-focus .list-group-item:focus .text-focus {
            color: #2c7be5 !important;
        }

        .list-group-activity .list-group-item {
            border: 0;
        }

        .list-group-activity .list-group-item:not(:last-child)::before {
            content: "";
            position: absolute;
            top: 1rem;
            left: 1.25rem;
            height: 100%;
            border-left: 1px solid #e3ebf6;
        }

        .modal.fade .modal-dialog {
            transform: translate(0, -150px);
        }

        .modal.show .modal-dialog {
            transform: translate(0, 0);
        }

        .modal-header .close {
            margin: -1.5rem -1.5rem -1.5rem auto;
        }

        .modal-dialog-vertical {
            height: 100%;
            max-width: 350px;
            margin: 0;
        }

        .modal-dialog-vertical .modal-content {
            height: inherit;
            border-width: 0 1px 0 0;
            border-radius: 0;
        }

        .modal-dialog-vertical .modal-header {
            border-radius: inherit;
        }

        .modal-dialog-vertical .modal-body {
            height: inherit;
            overflow-y: auto;
        }

        .modal.fade .modal-dialog-vertical {
            transform: translateX(-100%);
        }

        .modal.show .modal-dialog-vertical {
            transform: translateX(0);
        }

        .modal.fixed-right {
            padding-right: 0 !important;
        }

        .modal.fixed-right .modal-dialog-vertical {
            margin-left: auto;
        }

        .modal.fixed-right.fade .modal-dialog-vertical {
            transform: translateX(100%);
        }

        .modal.fixed-right.show .modal-dialog-vertical {
            transform: translateX(0);
        }

        .modal-card {
            margin-bottom: 0;
        }

        .modal-card .card-body {
            max-height: 350px;
            overflow-y: auto;
        }

        .modal-header-tabs {
            margin-top: -1rem;
            margin-bottom: calc(-1rem - 1px);
        }

        .nav-tabs .nav-item {
            margin-left: 0.75rem;
            margin-right: 0.75rem;
        }

        .nav-tabs .nav-link {
            padding: 1rem 0;
            border-bottom: 1px solid transparent;
            border-left-width: 0;
            border-right-width: 0;
            border-top-width: 0;
        }

        .nav-tabs .nav-link:not(.active) {
            color: #95aac9;
        }

        .nav-tabs .nav-link:not(.active):hover {
            color: #6e84a3;
        }

        .nav-tabs .nav-item:first-child {
            margin-left: 0;
        }

        .nav-tabs .nav-item:last-child {
            margin-right: 0;
        }

        .nav-tabs .nav-item.show .nav-link {
            border-color: transparent;
        }

        .nav-overflow {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding-bottom: 1px;
        }

        .nav-overflow::-webkit-scrollbar {
            display: none;
        }

        .nav-tabs-sm {
            font-size: 0.8125rem;
        }

        .nav-tabs-sm .nav-item {
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }

        .nav-tabs-sm .nav-link {
            padding-top: 1.15385rem;
            padding-bottom: 1.15385rem;
        }

        .nav-sm .nav-link {
            font-size: 0.8125rem;
        }

        .nav.btn-group .btn-white.active {
            background-color: #2c7be5;
            border-color: #2c7be5;
            color: #fff;
        }

        .navbar {
            border-width: 0 0 1px 0;
            border-style: solid;
        }

        .navbar-dark {
            background-color: #152e4d;
            border-color: #152e4d;
        }

        .navbar-dark .navbar-heading {
            color: #6e84a3;
        }

        .navbar-dark .navbar-divider {
            border-color: #1e3a5c;
        }

        .navbar-dark .navbar-user {
            border-top-color: #1e3a5c;
        }

        .navbar-dark .navbar-user-link {
            color: #6e84a3;
        }

        .navbar-dark .navbar-user-link:focus,
        .navbar-dark .navbar-user-link:hover {
            color: #fff;
        }

        .navbar-dark .navbar-brand {
            -webkit-filter: none;
            filter: none;
        }

        .navbar-dark .navbar-collapse::before {
            border-top-color: #1e3a5c;
        }

        .navbar-dark.navbar-expand-xs .navbar-nav .dropdown-item {
            color: #6e84a3;
        }

        .navbar-dark.navbar-expand-xs .navbar-nav .dropdown-item:focus,
        .navbar-dark.navbar-expand-xs .navbar-nav .dropdown-item:hover {
            color: #fff;
        }

        .navbar-dark.navbar-expand-xs .navbar-nav .dropdown-item.active,
        .navbar-dark.navbar-expand-xs .navbar-nav .dropdown-item:active,
        .navbar-dark.navbar-expand-xs .navbar-nav .show > .nav-link {
            color: #fff;
        }

        @media (max-width: 575.98px) {
            .navbar-dark.navbar-expand-sm .navbar-nav .dropdown-item {
                color: #6e84a3;
            }

            .navbar-dark.navbar-expand-sm .navbar-nav .dropdown-item:focus,
            .navbar-dark.navbar-expand-sm .navbar-nav .dropdown-item:hover {
                color: #fff;
            }

            .navbar-dark.navbar-expand-sm .navbar-nav .dropdown-item.active,
            .navbar-dark.navbar-expand-sm .navbar-nav .dropdown-item:active,
            .navbar-dark.navbar-expand-sm .navbar-nav .show > .nav-link {
                color: #fff;
            }
        }

        @media (max-width: 767.98px) {
            .navbar-dark.navbar-expand-md .navbar-nav .dropdown-item {
                color: #6e84a3;
            }

            .navbar-dark.navbar-expand-md .navbar-nav .dropdown-item:focus,
            .navbar-dark.navbar-expand-md .navbar-nav .dropdown-item:hover {
                color: #fff;
            }

            .navbar-dark.navbar-expand-md .navbar-nav .dropdown-item.active,
            .navbar-dark.navbar-expand-md .navbar-nav .dropdown-item:active,
            .navbar-dark.navbar-expand-md .navbar-nav .show > .nav-link {
                color: #fff;
            }
        }

        @media (max-width: 991.98px) {
            .navbar-dark.navbar-expand-lg .navbar-nav .dropdown-item {
                color: #6e84a3;
            }

            .navbar-dark.navbar-expand-lg .navbar-nav .dropdown-item:focus,
            .navbar-dark.navbar-expand-lg .navbar-nav .dropdown-item:hover {
                color: #fff;
            }

            .navbar-dark.navbar-expand-lg .navbar-nav .dropdown-item.active,
            .navbar-dark.navbar-expand-lg .navbar-nav .dropdown-item:active,
            .navbar-dark.navbar-expand-lg .navbar-nav .show > .nav-link {
                color: #fff;
            }
        }

        @media (max-width: 1199.98px) {
            .navbar-dark.navbar-expand-xl .navbar-nav .dropdown-item {
                color: #6e84a3;
            }

            .navbar-dark.navbar-expand-xl .navbar-nav .dropdown-item:focus,
            .navbar-dark.navbar-expand-xl .navbar-nav .dropdown-item:hover {
                color: #fff;
            }

            .navbar-dark.navbar-expand-xl .navbar-nav .dropdown-item.active,
            .navbar-dark.navbar-expand-xl .navbar-nav .dropdown-item:active,
            .navbar-dark.navbar-expand-xl .navbar-nav .show > .nav-link {
                color: #fff;
            }
        }

        .navbar-dark.navbar-vibrant {
            background-repeat: no-repeat, no-repeat;
            background-position: center center, center center;
            background-size: cover, cover;
            background-origin: border-box;
            border-color: transparent;
        }

        @media (max-width: 767.98px) {
            .navbar-dark.navbar-vibrant {
                background-attachment: fixed, fixed;
            }
        }

        .navbar-dark.navbar-vibrant .nav-link {
            color: rgba(255, 255, 255, 0.7);
        }

        .navbar-dark.navbar-vibrant .nav-link:focus,
        .navbar-dark.navbar-vibrant .nav-link:hover {
            color: #fff;
        }

        .navbar-dark.navbar-vibrant .nav-item .nav-link.active,
        .navbar-dark.navbar-vibrant .nav-item.active .nav-link {
            color: #fff;
        }

        .navbar-dark.navbar-vibrant .navbar-heading {
            color: rgba(255, 255, 255, 0.4);
        }

        .navbar-dark.navbar-vibrant .navbar-divider {
            border-color: rgba(255, 255, 255, 0.2);
        }

        .navbar-dark.navbar-vibrant .navbar-user {
            border-top-color: rgba(255, 255, 255, 0.2);
        }

        .navbar-dark.navbar-vibrant .navbar-user-link {
            color: rgba(255, 255, 255, 0.7);
        }

        .navbar-dark.navbar-vibrant .navbar-user-link:focus,
        .navbar-dark.navbar-vibrant .navbar-user-link:hover {
            color: #fff;
        }

        .navbar-dark.navbar-vibrant .navbar-brand {
            -webkit-filter: brightness(0) invert(1);
            filter: brightness(0) invert(1);
        }

        .navbar-dark.navbar-vibrant .navbar-collapse::before {
            border-top-color: rgba(255, 255, 255, 0.2);
        }

        .navbar-dark.navbar-vibrant .navbar-nav .nav-link.active::before {
            border-color: #fff;
        }

        .navbar-dark.navbar-vibrant.navbar-expand-xs .navbar-nav .dropdown-item {
            color: rgba(255, 255, 255, 0.7);
        }

        .navbar-dark.navbar-vibrant.navbar-expand-xs .navbar-nav .dropdown-item:focus,
        .navbar-dark.navbar-vibrant.navbar-expand-xs .navbar-nav .dropdown-item:hover {
            color: #fff;
        }

        .navbar-dark.navbar-vibrant.navbar-expand-xs .navbar-nav .dropdown-item.active,
        .navbar-dark.navbar-vibrant.navbar-expand-xs .navbar-nav .dropdown-item:active,
        .navbar-dark.navbar-vibrant.navbar-expand-xs .navbar-nav .show > .nav-link {
            color: #fff;
        }

        @media (max-width: 575.98px) {
            .navbar-dark.navbar-vibrant.navbar-expand-sm .navbar-nav .dropdown-item {
                color: rgba(255, 255, 255, 0.7);
            }

            .navbar-dark.navbar-vibrant.navbar-expand-sm .navbar-nav .dropdown-item:focus,
            .navbar-dark.navbar-vibrant.navbar-expand-sm .navbar-nav .dropdown-item:hover {
                color: #fff;
            }

            .navbar-dark.navbar-vibrant.navbar-expand-sm .navbar-nav .dropdown-item.active,
            .navbar-dark.navbar-vibrant.navbar-expand-sm .navbar-nav .dropdown-item:active,
            .navbar-dark.navbar-vibrant.navbar-expand-sm .navbar-nav .show > .nav-link {
                color: #fff;
            }
        }

        @media (max-width: 767.98px) {
            .navbar-dark.navbar-vibrant.navbar-expand-md .navbar-nav .dropdown-item {
                color: rgba(255, 255, 255, 0.7);
            }

            .navbar-dark.navbar-vibrant.navbar-expand-md .navbar-nav .dropdown-item:focus,
            .navbar-dark.navbar-vibrant.navbar-expand-md .navbar-nav .dropdown-item:hover {
                color: #fff;
            }

            .navbar-dark.navbar-vibrant.navbar-expand-md .navbar-nav .dropdown-item.active,
            .navbar-dark.navbar-vibrant.navbar-expand-md .navbar-nav .dropdown-item:active,
            .navbar-dark.navbar-vibrant.navbar-expand-md .navbar-nav .show > .nav-link {
                color: #fff;
            }
        }

        @media (max-width: 991.98px) {
            .navbar-dark.navbar-vibrant.navbar-expand-lg .navbar-nav .dropdown-item {
                color: rgba(255, 255, 255, 0.7);
            }

            .navbar-dark.navbar-vibrant.navbar-expand-lg .navbar-nav .dropdown-item:focus,
            .navbar-dark.navbar-vibrant.navbar-expand-lg .navbar-nav .dropdown-item:hover {
                color: #fff;
            }

            .navbar-dark.navbar-vibrant.navbar-expand-lg .navbar-nav .dropdown-item.active,
            .navbar-dark.navbar-vibrant.navbar-expand-lg .navbar-nav .dropdown-item:active,
            .navbar-dark.navbar-vibrant.navbar-expand-lg .navbar-nav .show > .nav-link {
                color: #fff;
            }
        }

        @media (max-width: 1199.98px) {
            .navbar-dark.navbar-vibrant.navbar-expand-xl .navbar-nav .dropdown-item {
                color: rgba(255, 255, 255, 0.7);
            }

            .navbar-dark.navbar-vibrant.navbar-expand-xl .navbar-nav .dropdown-item:focus,
            .navbar-dark.navbar-vibrant.navbar-expand-xl .navbar-nav .dropdown-item:hover {
                color: #fff;
            }

            .navbar-dark.navbar-vibrant.navbar-expand-xl .navbar-nav .dropdown-item.active,
            .navbar-dark.navbar-vibrant.navbar-expand-xl .navbar-nav .dropdown-item:active,
            .navbar-dark.navbar-vibrant.navbar-expand-xl .navbar-nav .show > .nav-link {
                color: #fff;
            }
        }

        .navbar-dark.navbar-vibrant .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-light {
            background-color: #fff;
            border-color: #e3ebf6;
        }

        .navbar-light .navbar-heading {
            color: #95aac9;
        }

        .navbar-light .navbar-divider {
            border-color: #e3ebf6;
        }

        .navbar-light .navbar-user {
            border-top-color: #e3ebf6;
        }

        .navbar-light .navbar-user-link {
            color: #6e84a3;
        }

        .navbar-light .navbar-user-link:focus,
        .navbar-light .navbar-user-link:hover {
            color: #12263f;
        }

        .navbar-light .navbar-brand {
            -webkit-filter: none;
            filter: none;
        }

        .navbar-light .navbar-collapse::before {
            border-top-color: #e3ebf6;
        }

        .navbar-brand {
            margin-right: 0;
        }

        .navbar-brand-img,
        .navbar-brand > img {
            max-width: 100%;
            max-height: 1.5rem;
        }

        .navbar-collapse {
            margin-left: -1rem;
            margin-right: -1rem;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .navbar-collapse:before {
            content: "";
            display: block;
            border-top-width: 1px;
            border-top-style: solid;
            margin: 0.75rem -1rem;
        }

        .navbar-nav {
            margin-left: -1rem;
            margin-right: -1rem;
        }

        .navbar-nav .nav-link {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .navbar-nav .nav-link.active {
            position: relative;
        }

        .navbar-nav .nav-link.active:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.5rem;
            bottom: 0.5rem;
            border-left: 2px solid #2c7be5;
        }

        .navbar-nav .nav-link > .fe {
            min-width: 1.75rem;
            padding-bottom: 0.125em;
            font-size: 1.0625rem;
            line-height: 1.40625rem;
        }

        .navbar-nav .dropdown-menu {
            border: none;
        }

        .navbar-nav .dropdown-menu .dropdown-menu {
            margin-left: 0.75rem;
        }

        .navbar-expand-xs .navbar-nav .dropdown-menu {
            background-color: transparent;
        }

        @media (max-width: 575.98px) {
            .navbar-expand-sm .navbar-nav .dropdown-menu {
                background-color: transparent;
            }
        }

        @media (max-width: 767.98px) {
            .navbar-expand-md .navbar-nav .dropdown-menu {
                background-color: transparent;
            }
        }

        @media (max-width: 991.98px) {
            .navbar-expand-lg .navbar-nav .dropdown-menu {
                background-color: transparent;
            }
        }

        @media (max-width: 1199.98px) {
            .navbar-expand-xl .navbar-nav .dropdown-menu {
                background-color: transparent;
            }
        }

        .navbar-expand-xs {
            padding-left: 0;
            padding-right: 0;
        }

        .navbar-expand-xs > [class*="container"] {
            padding-left: 0;
            padding-right: 0;
        }

        .navbar-expand-xs .navbar-collapse {
            flex-grow: inherit;
        }

        .navbar-expand-xs .navbar-collapse:before {
            display: none;
        }

        .navbar-expand-xs .navbar-nav {
            margin-left: 0;
            margin-right: 0;
        }

        .navbar-expand-xs .navbar-nav .nav-link {
            padding: 0.625rem 0.5rem;
        }

        .navbar-expand-xs .navbar-nav .nav-link.active {
            position: relative;
        }

        .navbar-expand-xs .navbar-nav .nav-link.active:before {
            top: auto;
            bottom: calc(-0.75rem - 1px);
            right: 0.5rem;
            left: 0.5rem;
            border-left: 0;
            border-bottom: 1px solid #2c7be5;
        }

        .navbar-expand-xs .dropdown:hover > .dropdown-menu,
        .navbar-expand-xs .dropleft:hover > .dropdown-menu,
        .navbar-expand-xs .dropright:hover > .dropdown-menu,
        .navbar-expand-xs .dropup:hover > .dropdown-menu {
            display: block;
        }

        .navbar-expand-xs .navbar-nav .dropdown-menu {
            border: 1px solid rgba(18, 38, 63, 0.1);
        }

        .navbar-expand-xs .navbar-nav .dropdown-menu .dropdown-menu {
            margin-left: 0;
        }

        @media (min-width: 576px) {
            .navbar-expand-sm {
                padding-left: 0;
                padding-right: 0;
            }

            .navbar-expand-sm > [class*="container"] {
                padding-left: 0;
                padding-right: 0;
            }

            .navbar-expand-sm .navbar-collapse {
                flex-grow: inherit;
            }

            .navbar-expand-sm .navbar-collapse:before {
                display: none;
            }

            .navbar-expand-sm .navbar-nav {
                margin-left: 0;
                margin-right: 0;
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding: 0.625rem 0.5rem;
            }

            .navbar-expand-sm .navbar-nav .nav-link.active {
                position: relative;
            }

            .navbar-expand-sm .navbar-nav .nav-link.active:before {
                top: auto;
                bottom: calc(-0.75rem - 1px);
                right: 0.5rem;
                left: 0.5rem;
                border-left: 0;
                border-bottom: 1px solid #2c7be5;
            }

            .navbar-expand-sm .dropdown:hover > .dropdown-menu,
            .navbar-expand-sm .dropleft:hover > .dropdown-menu,
            .navbar-expand-sm .dropright:hover > .dropdown-menu,
            .navbar-expand-sm .dropup:hover > .dropdown-menu {
                display: block;
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                border: 1px solid rgba(18, 38, 63, 0.1);
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu .dropdown-menu {
                margin-left: 0;
            }
        }

        @media (min-width: 768px) {
            .navbar-expand-md {
                padding-left: 0;
                padding-right: 0;
            }

            .navbar-expand-md > [class*="container"] {
                padding-left: 0;
                padding-right: 0;
            }

            .navbar-expand-md .navbar-collapse {
                flex-grow: inherit;
            }

            .navbar-expand-md .navbar-collapse:before {
                display: none;
            }

            .navbar-expand-md .navbar-nav {
                margin-left: 0;
                margin-right: 0;
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding: 0.625rem 0.5rem;
            }

            .navbar-expand-md .navbar-nav .nav-link.active {
                position: relative;
            }

            .navbar-expand-md .navbar-nav .nav-link.active:before {
                top: auto;
                bottom: calc(-0.75rem - 1px);
                right: 0.5rem;
                left: 0.5rem;
                border-left: 0;
                border-bottom: 1px solid #2c7be5;
            }

            .navbar-expand-md .dropdown:hover > .dropdown-menu,
            .navbar-expand-md .dropleft:hover > .dropdown-menu,
            .navbar-expand-md .dropright:hover > .dropdown-menu,
            .navbar-expand-md .dropup:hover > .dropdown-menu {
                display: block;
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                border: 1px solid rgba(18, 38, 63, 0.1);
            }

            .navbar-expand-md .navbar-nav .dropdown-menu .dropdown-menu {
                margin-left: 0;
            }
        }

        @media (min-width: 992px) {
            .navbar-expand-lg {
                padding-left: 0;
                padding-right: 0;
            }

            .navbar-expand-lg > [class*="container"] {
                padding-left: 12px;
                padding-right: 12px;
            }

            .navbar-expand-lg .navbar-collapse {
                flex-grow: inherit;
            }

            .navbar-expand-lg .navbar-collapse:before {
                display: none;
            }

            .navbar-expand-lg .navbar-nav {
                margin-left: 0;
                margin-right: 0;
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding: 0.625rem 0.5rem;
            }

            .navbar-expand-lg .navbar-nav .nav-link.active {
                position: relative;
            }

            .navbar-expand-lg .navbar-nav .nav-link.active:before {
                top: auto;
                bottom: calc(-0.75rem - 1px);
                border-left: 0;
                width: 80px;
                content: " ";
                background-image: /*savepage-url=../assets/img/active.svg*/ var(--savepage-url-14);
                height: 2.5px;
                margin-top: 2.5rem;
            }

            .navbar-expand-lg .dropdown:hover > .dropdown-menu,
            .navbar-expand-lg .dropleft:hover > .dropdown-menu,
            .navbar-expand-lg .dropright:hover > .dropdown-menu,
            .navbar-expand-lg .dropup:hover > .dropdown-menu {
                display: block;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                border: 1px solid rgba(18, 38, 63, 0.1);
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu .dropdown-menu {
                margin-left: 0;
            }
        }

        @media (min-width: 1200px) {
            .navbar-expand-xl {
                padding-left: 0;
                padding-right: 0;
            }

            .navbar-expand-xl > [class*="container"] {
                padding-left: 0;
                padding-right: 0;
            }

            .navbar-expand-xl .navbar-collapse {
                flex-grow: inherit;
            }

            .navbar-expand-xl .navbar-collapse:before {
                display: none;
            }

            .navbar-expand-xl .navbar-nav {
                margin-left: 0;
                margin-right: 0;
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding: 0.625rem 0.5rem;
            }

            .navbar-expand-xl .navbar-nav .nav-link.active {
                position: relative;
            }

            .navbar-expand-xl .navbar-nav .nav-link.active:before {
                top: auto;
                bottom: calc(-0.75rem - 1px);
                right: 0.5rem;
                left: 0.5rem;
                border-left: 0;
                border-bottom: 1px solid #2c7be5;
            }

            .navbar-expand-xl .dropdown:hover > .dropdown-menu,
            .navbar-expand-xl .dropleft:hover > .dropdown-menu,
            .navbar-expand-xl .dropright:hover > .dropdown-menu,
            .navbar-expand-xl .dropup:hover > .dropdown-menu {
                display: block;
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                border: 1px solid rgba(18, 38, 63, 0.1);
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu .dropdown-menu {
                margin-left: 0;
            }
        }

        .navbar[class*="fixed-"] {
            z-index: 1030;
        }

        .navbar-overflow {
            display: flex;
            flex-grow: 1;
            flex-basis: 0;
            margin-bottom: -0.75rem;
            overflow-x: auto;
        }

        .navbar-overflow::-webkit-scrollbar {
            display: none;
        }

        .navbar-overflow .navbar-nav {
            flex-direction: row;
            flex-wrap: nowrap;
            margin-left: -0.5rem;
            margin-right: -0.5rem;
        }

        .navbar-overflow .navbar-nav .nav-link {
            padding-bottom: 1.25rem;
        }

        .navbar-overflow .navbar-nav .nav-link.active:before {
            bottom: 0;
        }

        .navbar-breadcrumb {
            padding: 0.5rem 0;
        }

        .navbar-user {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
        }

        .navbar-user .dropdown-toggle:after {
            display: none;
        }

        .navbar-nav .nav-link > .fe {
            display: inline-block;
            min-width: 1.75rem;
        }

        .navbar-vertical .navbar-nav .nav-link {
            display: flex;
            align-items: center;
        }

        .navbar-vertical .navbar-nav .nav-link[data-toggle="collapse"]:after {
            display: block;
            content: "\e92e";
            font-family: Feather;
            margin-left: auto;
            transition: transform 0.2s;
        }

        .navbar-vertical .navbar-nav .nav-link[data-toggle="collapse"][aria-expanded="true"]:after {
            transform: rotate(-180deg);
        }

        .navbar-vertical .navbar-nav .nav .nav-link {
            padding-left: 2.75rem;
        }

        .navbar-vertical .navbar-nav .nav .nav .nav-link {
            padding-left: 3.25rem;
        }

        .navbar-vertical .navbar-nav .nav .nav .nav .nav-link {
            padding-left: 3.75rem;
        }

        .navbar-vertical .navbar-heading {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            font-size: 0.625rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .navbar-vertical.navbar-expand-xs {
            display: block;
            position: fixed;
            top: 0;
            bottom: 0;
            width: 100%;
            max-width: 250px;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            overflow-y: auto;
        }

        .navbar-vertical.navbar-expand-xs > [class*="container"] {
            flex-direction: column;
            align-items: stretch;
            min-height: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .navbar-vertical.navbar-expand-xs > [class*="container"] {
                min-height: none;
                height: 100%;
            }
        }

        .navbar-vertical.navbar-expand-xs.fixed-left {
            left: 0;
            border-width: 0 1px 0 0;
        }

        .navbar-vertical.navbar-expand-xs.fixed-right {
            right: 0;
            border-width: 0 0 0 1px;
        }

        .navbar-vertical.navbar-expand-xs .navbar-collapse {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            margin-left: -1.5rem;
            margin-right: -1.5rem;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .navbar-vertical.navbar-expand-xs .navbar-collapse > * {
            min-width: 100%;
        }

        .navbar-vertical.navbar-expand-xs .navbar-nav {
            flex-direction: column;
            margin-left: -1.5rem;
            margin-right: -1.5rem;
        }

        .navbar-vertical.navbar-expand-xs .navbar-nav .nav-link {
            padding: 0.5rem 1.5rem;
        }

        .navbar-vertical.navbar-expand-xs .navbar-nav .nav-link.active:before {
            top: 0.5rem;
            bottom: 0.5rem;
            left: 0;
            right: auto;
            border-left: 2px solid #2c7be5;
            border-bottom: 0;
        }

        .navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav-link {
            padding-left: 3.25rem;
        }

        .navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav .nav-link {
            padding-left: 4rem;
        }

        .navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav .nav .nav-link {
            padding-left: 4.75rem;
        }

        .navbar-vertical.navbar-expand-xs .navbar-brand {
            display: block;
            text-align: center;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
        }

        .navbar-vertical.navbar-expand-xs .navbar-brand-img {
            max-height: 3rem;
        }

        .navbar-vertical.navbar-expand-xs .navbar-user {
            margin-left: -1.5rem;
            margin-right: -1.5rem;
            padding-top: 1.5rem;
            padding-bottom: 0.75rem;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            border-top-width: 1px;
            border-top-style: solid;
        }

        .navbar-vertical.navbar-expand-xs .navbar-user .dropup .dropdown-menu {
            left: 50%;
            transform: translateX(-50%);
        }

        @media (min-width: 576px) {
            .navbar-vertical.navbar-expand-sm {
                display: block;
                position: fixed;
                top: 0;
                bottom: 0;
                width: 100%;
                max-width: 250px;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
                overflow-y: auto;
            }

            .navbar-vertical.navbar-expand-sm > [class*="container"] {
                flex-direction: column;
                align-items: stretch;
                min-height: 100%;
                padding-left: 0;
                padding-right: 0;
            }
        }

        @media all and (min-width: 576px) and (-ms-high-contrast: none),
        (min-width: 576px) and (-ms-high-contrast: active) {
            .navbar-vertical.navbar-expand-sm > [class*="container"] {
                min-height: none;
                height: 100%;
            }
        }

        @media (min-width: 576px) {
            .navbar-vertical.navbar-expand-sm.fixed-left {
                left: 0;
                border-width: 0 1px 0 0;
            }

            .navbar-vertical.navbar-expand-sm.fixed-right {
                right: 0;
                border-width: 0 0 0 1px;
            }

            .navbar-vertical.navbar-expand-sm .navbar-collapse {
                flex: 1;
                display: flex;
                flex-direction: column;
                align-items: stretch;
                margin-left: -1.5rem;
                margin-right: -1.5rem;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .navbar-vertical.navbar-expand-sm .navbar-collapse > * {
                min-width: 100%;
            }

            .navbar-vertical.navbar-expand-sm .navbar-nav {
                flex-direction: column;
                margin-left: -1.5rem;
                margin-right: -1.5rem;
            }

            .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link {
                padding: 0.5rem 1.5rem;
            }

            .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link.active:before {
                top: 0.5rem;
                bottom: 0.5rem;
                left: 0;
                right: auto;
                border-left: 2px solid #2c7be5;
                border-bottom: 0;
            }

            .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav-link {
                padding-left: 3.25rem;
            }

            .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav .nav-link {
                padding-left: 4rem;
            }

            .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav .nav .nav-link {
                padding-left: 4.75rem;
            }

            .navbar-vertical.navbar-expand-sm .navbar-brand {
                display: block;
                text-align: center;
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
            }

            .navbar-vertical.navbar-expand-sm .navbar-brand-img {
                max-height: 3rem;
            }

            .navbar-vertical.navbar-expand-sm .navbar-user {
                margin-left: -1.5rem;
                margin-right: -1.5rem;
                padding-top: 1.5rem;
                padding-bottom: 0.75rem;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
                border-top-width: 1px;
                border-top-style: solid;
            }

            .navbar-vertical.navbar-expand-sm .navbar-user .dropup .dropdown-menu {
                left: 50%;
                transform: translateX(-50%);
            }
        }

        @media (min-width: 768px) {
            .navbar-vertical.navbar-expand-md {
                display: block;
                position: fixed;
                top: 0;
                bottom: 0;
                width: 100%;
                max-width: 250px;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
                overflow-y: auto;
            }

            .navbar-vertical.navbar-expand-md > [class*="container"] {
                flex-direction: column;
                align-items: stretch;
                min-height: 100%;
                padding-left: 0;
                padding-right: 0;
            }
        }

        @media all and (min-width: 768px) and (-ms-high-contrast: none),
        (min-width: 768px) and (-ms-high-contrast: active) {
            .navbar-vertical.navbar-expand-md > [class*="container"] {
                min-height: none;
                height: 100%;
            }
        }

        @media (min-width: 768px) {
            .navbar-vertical.navbar-expand-md.fixed-left {
                left: 0;
                border-width: 0 1px 0 0;
            }

            .navbar-vertical.navbar-expand-md.fixed-right {
                right: 0;
                border-width: 0 0 0 1px;
            }

            .navbar-vertical.navbar-expand-md .navbar-collapse {
                flex: 1;
                display: flex;
                flex-direction: column;
                align-items: stretch;
                margin-left: -1.5rem;
                margin-right: -1.5rem;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .navbar-vertical.navbar-expand-md .navbar-collapse > * {
                min-width: 100%;
            }

            .navbar-vertical.navbar-expand-md .navbar-nav {
                flex-direction: column;
                margin-left: -1.5rem;
                margin-right: -1.5rem;
            }

            .navbar-vertical.navbar-expand-md .navbar-nav .nav-link {
                padding: 0.5rem 1.5rem;
            }

            .navbar-vertical.navbar-expand-md .navbar-nav .nav-link.active:before {
                top: 0.5rem;
                bottom: 0.5rem;
                left: 0;
                right: auto;
                border-left: 2px solid #2c7be5;
                border-bottom: 0;
            }

            .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav-link {
                padding-left: 3.25rem;
            }

            .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav .nav-link {
                padding-left: 4rem;
            }

            .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav .nav .nav-link {
                padding-left: 4.75rem;
            }

            .navbar-vertical.navbar-expand-md .navbar-brand {
                display: block;
                text-align: center;
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
            }

            .navbar-vertical.navbar-expand-md .navbar-brand-img {
                max-height: 3rem;
            }

            .navbar-vertical.navbar-expand-md .navbar-user {
                margin-left: -1.5rem;
                margin-right: -1.5rem;
                padding-top: 1.5rem;
                padding-bottom: 0.75rem;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
                border-top-width: 1px;
                border-top-style: solid;
            }

            .navbar-vertical.navbar-expand-md .navbar-user .dropup .dropdown-menu {
                left: 50%;
                transform: translateX(-50%);
            }
        }

        @media (min-width: 992px) {
            .navbar-vertical.navbar-expand-lg {
                display: block;
                position: fixed;
                top: 0;
                bottom: 0;
                width: 100%;
                max-width: 250px;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
                overflow-y: auto;
            }

            .navbar-vertical.navbar-expand-lg > [class*="container"] {
                flex-direction: column;
                align-items: stretch;
                min-height: 100%;
                padding-left: 0;
                padding-right: 0;
            }
        }

        @media all and (min-width: 992px) and (-ms-high-contrast: none),
        (min-width: 992px) and (-ms-high-contrast: active) {
            .navbar-vertical.navbar-expand-lg > [class*="container"] {
                min-height: none;
                height: 100%;
            }
        }

        @media (min-width: 992px) {
            .navbar-vertical.navbar-expand-lg.fixed-left {
                left: 0;
                border-width: 0 1px 0 0;
            }

            .navbar-vertical.navbar-expand-lg.fixed-right {
                right: 0;
                border-width: 0 0 0 1px;
            }

            .navbar-vertical.navbar-expand-lg .navbar-collapse {
                flex: 1;
                display: flex;
                flex-direction: column;
                align-items: stretch;
                margin-left: -1.5rem;
                margin-right: -1.5rem;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .navbar-vertical.navbar-expand-lg .navbar-collapse > * {
                min-width: 100%;
            }

            .navbar-vertical.navbar-expand-lg .navbar-nav {
                flex-direction: column;
                margin-left: -1.5rem;
                margin-right: -1.5rem;
            }

            .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link {
                padding: 0.5rem 1.5rem;
            }

            .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link.active:before {
                top: 0.5rem;
                bottom: 0.5rem;
                left: 0;
                right: auto;
                border-left: 2px solid #2c7be5;
                border-bottom: 0;
            }

            .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav-link {
                padding-left: 3.25rem;
            }

            .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav .nav-link {
                padding-left: 4rem;
            }

            .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav .nav .nav-link {
                padding-left: 4.75rem;
            }

            .navbar-vertical.navbar-expand-lg .navbar-brand {
                display: block;
                text-align: center;
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
            }

            .navbar-vertical.navbar-expand-lg .navbar-brand-img {
                max-height: 3rem;
            }

            .navbar-vertical.navbar-expand-lg .navbar-user {
                margin-left: -1.5rem;
                margin-right: -1.5rem;
                padding-top: 1.5rem;
                padding-bottom: 0.75rem;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
                border-top-width: 1px;
                border-top-style: solid;
            }

            .navbar-vertical.navbar-expand-lg .navbar-user .dropup .dropdown-menu {
                left: 50%;
                transform: translateX(-50%);
            }
        }

        @media (min-width: 1200px) {
            .navbar-vertical.navbar-expand-xl {
                display: block;
                position: fixed;
                top: 0;
                bottom: 0;
                width: 100%;
                max-width: 250px;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
                overflow-y: auto;
            }

            .navbar-vertical.navbar-expand-xl > [class*="container"] {
                flex-direction: column;
                align-items: stretch;
                min-height: 100%;
                padding-left: 0;
                padding-right: 0;
            }
        }

        @media all and (min-width: 1200px) and (-ms-high-contrast: none),
        (min-width: 1200px) and (-ms-high-contrast: active) {
            .navbar-vertical.navbar-expand-xl > [class*="container"] {
                min-height: none;
                height: 100%;
            }
        }

        @media (min-width: 1200px) {
            .navbar-vertical.navbar-expand-xl.fixed-left {
                left: 0;
                border-width: 0 1px 0 0;
            }

            .navbar-vertical.navbar-expand-xl.fixed-right {
                right: 0;
                border-width: 0 0 0 1px;
            }

            .navbar-vertical.navbar-expand-xl .navbar-collapse {
                flex: 1;
                display: flex;
                flex-direction: column;
                align-items: stretch;
                margin-left: -1.5rem;
                margin-right: -1.5rem;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .navbar-vertical.navbar-expand-xl .navbar-collapse > * {
                min-width: 100%;
            }

            .navbar-vertical.navbar-expand-xl .navbar-nav {
                flex-direction: column;
                margin-left: -1.5rem;
                margin-right: -1.5rem;
            }

            .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link {
                padding: 0.5rem 1.5rem;
            }

            .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link.active:before {
                top: 0.5rem;
                bottom: 0.5rem;
                left: 0;
                right: auto;
                border-left: 2px solid #2c7be5;
                border-bottom: 0;
            }

            .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav-link {
                padding-left: 3.25rem;
            }

            .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav .nav-link {
                padding-left: 4rem;
            }

            .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav .nav .nav-link {
                padding-left: 4.75rem;
            }

            .navbar-vertical.navbar-expand-xl .navbar-brand {
                display: block;
                text-align: center;
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
            }

            .navbar-vertical.navbar-expand-xl .navbar-brand-img {
                max-height: 3rem;
            }

            .navbar-vertical.navbar-expand-xl .navbar-user {
                margin-left: -1.5rem;
                margin-right: -1.5rem;
                padding-top: 1.5rem;
                padding-bottom: 0.75rem;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
                border-top-width: 1px;
                border-top-style: solid;
            }

            .navbar-vertical.navbar-expand-xl .navbar-user .dropup .dropdown-menu {
                left: 50%;
                transform: translateX(-50%);
            }
        }

        .navbar-vertical-sm.navbar-expand-xs {
            max-width: 66px;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            overflow: visible;
        }

        .navbar-vertical-sm.navbar-expand-xs .navbar-brand {
            padding-top: 0.45313rem;
            padding-bottom: 1.20313rem;
        }

        .navbar-vertical-sm.navbar-expand-xs .navbar-brand-img {
            width: auto;
            max-height: 1.5rem;
        }

        .navbar-vertical-sm.navbar-expand-xs .navbar-collapse {
            margin-left: -0.75rem;
            margin-right: -0.75rem;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .navbar-vertical-sm.navbar-expand-xs .navbar-nav {
            margin-left: -0.75rem;
            margin-right: -0.75rem;
        }

        .navbar-vertical-sm.navbar-expand-xs .navbar-nav > .nav-item > .nav-link {
            justify-content: center;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            text-align: center;
        }

        .navbar-vertical-sm.navbar-expand-xs .navbar-nav > .nav-item > .dropdown-toggle::after {
            display: none;
        }

        .navbar-vertical-sm.navbar-expand-xs .navbar-user {
            margin-left: -0.75rem;
            margin-right: -0.75rem;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .navbar-vertical-sm.navbar-expand-xs .navbar-user .dropright .dropdown-menu {
            top: auto;
            bottom: 0;
        }

        @media (min-width: 576px) {
            .navbar-vertical-sm.navbar-expand-sm {
                max-width: 66px;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                overflow: visible;
            }

            .navbar-vertical-sm.navbar-expand-sm .navbar-brand {
                padding-top: 0.45313rem;
                padding-bottom: 1.20313rem;
            }

            .navbar-vertical-sm.navbar-expand-sm .navbar-brand-img {
                width: auto;
                max-height: 1.5rem;
            }

            .navbar-vertical-sm.navbar-expand-sm .navbar-collapse {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-sm .navbar-nav {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-sm .navbar-nav > .nav-item > .nav-link {
                justify-content: center;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                text-align: center;
            }

            .navbar-vertical-sm.navbar-expand-sm .navbar-nav > .nav-item > .dropdown-toggle::after {
                display: none;
            }

            .navbar-vertical-sm.navbar-expand-sm .navbar-user {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-sm .navbar-user .dropright .dropdown-menu {
                top: auto;
                bottom: 0;
            }
        }

        @media (min-width: 768px) {
            .navbar-vertical-sm.navbar-expand-md {
                max-width: 66px;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                overflow: visible;
            }

            .navbar-vertical-sm.navbar-expand-md .navbar-brand {
                padding-top: 0.45313rem;
                padding-bottom: 1.20313rem;
            }

            .navbar-vertical-sm.navbar-expand-md .navbar-brand-img {
                width: auto;
                max-height: 1.5rem;
            }

            .navbar-vertical-sm.navbar-expand-md .navbar-collapse {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-md .navbar-nav {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-md .navbar-nav > .nav-item > .nav-link {
                justify-content: center;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                text-align: center;
            }

            .navbar-vertical-sm.navbar-expand-md .navbar-nav > .nav-item > .dropdown-toggle::after {
                display: none;
            }

            .navbar-vertical-sm.navbar-expand-md .navbar-user {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-md .navbar-user .dropright .dropdown-menu {
                top: auto;
                bottom: 0;
            }
        }

        @media (min-width: 992px) {
            .navbar-vertical-sm.navbar-expand-lg {
                max-width: 66px;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                overflow: visible;
            }

            .navbar-vertical-sm.navbar-expand-lg .navbar-brand {
                padding-top: 0.45313rem;
                padding-bottom: 1.20313rem;
            }

            .navbar-vertical-sm.navbar-expand-lg .navbar-brand-img {
                width: auto;
                max-height: 1.5rem;
            }

            .navbar-vertical-sm.navbar-expand-lg .navbar-collapse {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-lg .navbar-nav {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-lg .navbar-nav > .nav-item > .nav-link {
                justify-content: center;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                text-align: center;
            }

            .navbar-vertical-sm.navbar-expand-lg .navbar-nav > .nav-item > .dropdown-toggle::after {
                display: none;
            }

            .navbar-vertical-sm.navbar-expand-lg .navbar-user {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-lg .navbar-user .dropright .dropdown-menu {
                top: auto;
                bottom: 0;
            }
        }

        @media (min-width: 1200px) {
            .navbar-vertical-sm.navbar-expand-xl {
                max-width: 66px;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                overflow: visible;
            }

            .navbar-vertical-sm.navbar-expand-xl .navbar-brand {
                padding-top: 0.45313rem;
                padding-bottom: 1.20313rem;
            }

            .navbar-vertical-sm.navbar-expand-xl .navbar-brand-img {
                width: auto;
                max-height: 1.5rem;
            }

            .navbar-vertical-sm.navbar-expand-xl .navbar-collapse {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-xl .navbar-nav {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-xl .navbar-nav > .nav-item > .nav-link {
                justify-content: center;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                text-align: center;
            }

            .navbar-vertical-sm.navbar-expand-xl .navbar-nav > .nav-item > .dropdown-toggle::after {
                display: none;
            }

            .navbar-vertical-sm.navbar-expand-xl .navbar-user {
                margin-left: -0.75rem;
                margin-right: -0.75rem;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }

            .navbar-vertical-sm.navbar-expand-xl .navbar-user .dropright .dropdown-menu {
                top: auto;
                bottom: 0;
            }
        }

        .pagination-lg .page,
        .pagination-lg .page-link {
            font-size: 0.9375rem;
        }

        .pagination-tabs {
            border-radius: 0;
            border-top: 1px solid #e3ebf6;
        }

        .pagination-tabs .page,
        .pagination-tabs .page-link {
            margin-top: -1px;
            padding: 1.25rem 0.75rem;
            background-color: transparent;
            border-width: 1px 0 0 0;
            border-radius: 0 !important;
            color: #95aac9;
        }

        .pagination-tabs .page-link:hover,
        .pagination-tabs .page:hover {
            color: #12263f;
        }

        .pagination-tabs .active .page,
        .pagination-tabs .active .page-link {
            background-color: transparent;
            border-color: #2c7be5;
            color: #12263f;
        }

        .pagination-overflow {
            flex-wrap: nowrap;
            overflow-x: auto;
        }

        .pagination-overflow::-webkit-scrollbar {
            display: none;
        }

        .pagination-overflow .page,
        .pagination-overflow .page-link {
            white-space: nowrap;
        }

        .popover {
            padding: 0.8rem 0.95rem;
        }

        .popover:hover {
            visibility: visible !important;
        }

        .popover-header {
            margin-bottom: 0.25rem;
            border-bottom: 0;
        }

        .popover-body-label {
            margin-left: 0.25rem;
        }

        .popover-body-value {
            margin-left: 0.25rem;
        }

        .popover-body-indicator {
            display: inline-block;
            width: 0.5rem;
            height: 0.5rem;
            border-radius: 50%;
        }

        .popover-lg {
            max-width: 300px;
        }

        .popover-dark {
            background-color: #12263f;
            border-color: #12263f;
        }

        .popover-dark .popover-header {
            font-weight: 400;
            background-color: #12263f;
            color: #fff;
        }

        .popover-dark.bs-popover-auto[x-placement^="top"] .arrow::before,
        .popover-dark.bs-popover-top .arrow::before {
            border-top-color: #12263f;
        }

        .popover-dark.bs-popover-auto[x-placement^="top"] .arrow::after,
        .popover-dark.bs-popover-top .arrow::after {
            border-top-color: #12263f;
        }

        .popover-dark.bs-popover-auto[x-placement^="right"] .arrow::before,
        .popover-dark.bs-popover-right .arrow::before {
            border-right-color: #12263f;
        }

        .popover-dark.bs-popover-auto[x-placement^="right"] .arrow::after,
        .popover-dark.bs-popover-right .arrow::after {
            border-right-color: #12263f;
        }

        .popover-dark.bs-popover-auto[x-placement^="bottom"] .arrow::before,
        .popover-dark.bs-popover-bottom .arrow::before {
            border-bottom-color: #12263f;
        }

        .popover-dark.bs-popover-auto[x-placement^="bottom"] .arrow::after,
        .popover-dark.bs-popover-bottom .arrow::after {
            border-bottom-color: #12263f;
        }

        .popover-dark.bs-popover-auto[x-placement^="left"] .arrow::before,
        .popover-dark.bs-popover-left .arrow::before {
            border-left-color: #12263f;
        }

        .popover-dark.bs-popover-auto[x-placement^="left"] .arrow::after,
        .popover-dark.bs-popover-left .arrow::after {
            border-left-color: #12263f;
        }

        .progress-bar:first-child {
            border-top-left-radius: 200px;
            border-bottom-left-radius: 200px;
        }

        .progress-bar:last-child {
            border-top-right-radius: 200px;
            border-bottom-right-radius: 200px;
        }

        .progress-sm {
            height: 0.25rem;
        }

        [type="search"]::-webkit-search-cancel-button {
            -webkit-appearance: none;
        }

        html {
            height: 100%;
        }

        body {
            min-height: 100%;
        }

        .table thead th {
            background-color: #f9fbfd;
            text-transform: uppercase;
            font-size: 0.8125rem;
            font-weight: 600;
            letter-spacing: 0.08em;
            color: #95aac9;
            border-bottom-width: 1px;
        }

        .table tbody td,
        .table tbody th,
        .table thead th {
            vertical-align: middle;
        }

        .table-sm {
            font-size: 0.8125rem;
        }

        .table-sm thead th {
            font-size: 0.625rem;
        }

        .table-nowrap td,
        .table-nowrap th {
            white-space: nowrap;
        }

        .table [data-sort] {
            white-space: nowrap;
        }

        .table [data-sort]::after {
            content: url("data:image/svg+xml;utf8,<svg width='6' height='10' viewBox='0 0 6 10' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M3 0L6 4H0L3 0ZM3 10L0 6H6L3 10Z' fill='%2395AAC9'/></svg>");
            margin-left: 0.25rem;
        }

        .table-checkbox {
            min-height: 0;
        }

        .table-checkbox .custom-control-label::after,
        .table-checkbox .custom-control-label::before {
            top: 50%;
            transform: translateY(-50%);
        }

        .table a[class*="text-reset"]:hover {
            color: #2c7be5 !important;
        }

        .h1,
        h1 {
            margin-bottom: 1.125rem;
            font-size: 1.5rem;
        }

        @media (min-width: 768px) {
            .h1,
            h1 {
                font-size: 1.625rem;
            }
        }

        .h2,
        h2 {
            margin-bottom: 1.125rem;
        }

        .h3,
        h3 {
            margin-bottom: 0.84375rem;
        }

        .h4,
        h4 {
            margin-bottom: 0.5625rem;
        }

        .h5,
        h5 {
            margin-bottom: 0.5625rem;
        }

        .h6,
        h6 {
            margin-bottom: 0.5625rem;
        }

        .h1 > a,
        .h2 > a,
        .h3 > a,
        .h4 > a,
        .h5 > a,
        .h6 > a,
        h1 > a,
        h2 > a,
        h3 > a,
        h4 > a,
        h5 > a,
        h6 > a {
            color: inherit;
        }

        .display-1,
        .display-2,
        .display-3,
        .display-4 {
            letter-spacing: -0.02em;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            letter-spacing: -0.02em;
        }

        h6.text-uppercase {
            letter-spacing: 0.08em;
        }

        b,
        strong {
            font-weight: 600;
        }

        a:focus,
        button:focus {
            outline: 0 !important;
        }

        .bg-fixed-bottom {
            background-repeat: no-repeat;
            background-position: right bottom;
            background-size: 100% auto;
            background-attachment: fixed;
        }

        .navbar-vertical ~ .main-content.bg-fixed-bottom {
            background-size: 100%;
        }

        @media (min-width: 768px) {
            .navbar-vertical ~ .main-content.bg-fixed-bottom {
                background-size: calc(100% - 250px);
            }
        }

        .bg-cover {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .bg-auth {
            background-color: #fff;
        }

        .bg-ellipses.bg-primary {
            background-color: transparent !important;
            background-repeat: no-repeat;
            background-image: radial-gradient(#2c7be5, #2c7be5 70%, transparent 70.1%);
            background-size: 200% 150%;
            background-position: center bottom;
        }

        .bg-ellipses.bg-secondary {
            background-color: transparent !important;
            background-repeat: no-repeat;
            background-image: radial-gradient(#6e84a3, #6e84a3 70%, transparent 70.1%);
            background-size: 200% 150%;
            background-position: center bottom;
        }

        .bg-ellipses.bg-success {
            background-color: transparent !important;
            background-repeat: no-repeat;
            background-image: radial-gradient(#00d97e, #00d97e 70%, transparent 70.1%);
            background-size: 200% 150%;
            background-position: center bottom;
        }

        .bg-ellipses.bg-info {
            background-color: transparent !important;
            background-repeat: no-repeat;
            background-image: radial-gradient(#39afd1, #39afd1 70%, transparent 70.1%);
            background-size: 200% 150%;
            background-position: center bottom;
        }

        .bg-ellipses.bg-warning {
            background-color: transparent !important;
            background-repeat: no-repeat;
            background-image: radial-gradient(#f6c343, #f6c343 70%, transparent 70.1%);
            background-size: 200% 150%;
            background-position: center bottom;
        }

        .bg-ellipses.bg-danger {
            background-color: transparent !important;
            background-repeat: no-repeat;
            background-image: radial-gradient(#e63757, #e63757 70%, transparent 70.1%);
            background-size: 200% 150%;
            background-position: center bottom;
        }

        .bg-ellipses.bg-light {
            background-color: transparent !important;
            background-repeat: no-repeat;
            background-image: radial-gradient(#edf2f9, #edf2f9 70%, transparent 70.1%);
            background-size: 200% 150%;
            background-position: center bottom;
        }

        .bg-ellipses.bg-dark {
            background-color: transparent !important;
            background-repeat: no-repeat;
            background-image: radial-gradient(#12263f, #12263f 70%, transparent 70.1%);
            background-size: 200% 150%;
            background-position: center bottom;
        }

        .bg-ellipses.bg-white {
            background-color: transparent !important;
            background-repeat: no-repeat;
            background-image: radial-gradient(#fff, #fff 70%, transparent 70.1%);
            background-size: 200% 150%;
            background-position: center bottom;
        }

        .bg-hero {
            background-repeat: no-repeat, no-repeat;
            background-position: center center, center center;
            background-size: cover, cover;
        }

        .bg-lighter {
            background-color: #f9fbfd !important;
        }

        .bg-primary-soft {
            background-color: #e6effc !important;
        }

        .bg-secondary-soft {
            background-color: #eef0f4 !important;
        }

        .bg-success-soft {
            background-color: #e0faf0 !important;
        }

        .bg-info-soft {
            background-color: #e7f5f9 !important;
        }

        .bg-warning-soft {
            background-color: #fef8e8 !important;
        }

        .bg-danger-soft {
            background-color: #fce7eb !important;
        }

        .bg-light-soft {
            background-color: #fdfdfe !important;
        }

        .bg-dark-soft {
            background-color: #e3e5e8 !important;
        }

        .bg-white-soft {
            background-color: #fff !important;
        }

        .border-2 {
            border-width: 2px !important;
        }

        .border-top-2 {
            border-top-width: 2px !important;
        }

        .border-right-2 {
            border-right-width: 2px !important;
        }

        .border-bottom-2 {
            border-bottom-width: 2px !important;
        }

        .border-left-2 {
            border-left-width: 2px !important;
        }

        .border-3 {
            border-width: 3px !important;
        }

        .border-top-3 {
            border-top-width: 3px !important;
        }

        .border-right-3 {
            border-right-width: 3px !important;
        }

        .border-bottom-3 {
            border-bottom-width: 3px !important;
        }

        .border-left-3 {
            border-left-width: 3px !important;
        }

        .border-4 {
            border-width: 4px !important;
        }

        .border-top-4 {
            border-top-width: 4px !important;
        }

        .border-right-4 {
            border-right-width: 4px !important;
        }

        .border-bottom-4 {
            border-bottom-width: 4px !important;
        }

        .border-left-4 {
            border-left-width: 4px !important;
        }

        .border-5 {
            border-width: 5px !important;
        }

        .border-top-5 {
            border-top-width: 5px !important;
        }

        .border-right-5 {
            border-right-width: 5px !important;
        }

        .border-bottom-5 {
            border-bottom-width: 5px !important;
        }

        .border-left-5 {
            border-left-width: 5px !important;
        }

        .border-body {
            border-color: #f9fbfd !important;
        }

        .border-card {
            border-color: #fff !important;
        }

        .lift {
            transition: box-shadow 0.25s ease, transform 0.25s ease;
        }

        .lift:focus,
        .lift:hover {
            box-shadow: 0 1rem 2.5rem rgba(18, 38, 63, 0.1), 0 0.5rem 1rem -0.75rem rgba(18, 38, 63, 0.1) !important;
            transform: translate3d(0, -3px, 0);
        }

        .lift-lg:focus,
        .lift-lg:hover {
            box-shadow: 0 2rem 5rem rgba(18, 38, 63, 0.1), 0 0.5rem 1rem -0.75rem rgba(18, 38, 63, 0.05) !important;
            transform: translate3d(0, -5px, 0);
        }

        .vw-100 {
            width: 100vw !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .font-size-base {
            font-size: 0.9375rem !important;
        }

        .font-size-sm {
            font-size: 0.8125rem !important;
        }

        .font-size-lg {
            font-size: 1.0625rem !important;
        }

        .text-decoration-underline {
            text-decoration: underline !important;
        }

        .text-gray-100 {
            color: #f9fbfd !important;
        }

        .text-gray-200 {
            color: #edf2f9 !important;
        }

        .text-gray-300 {
            color: #e3ebf6 !important;
        }

        .text-gray-400 {
            color: #d2ddec !important;
        }

        .text-gray-500 {
            color: #b1c2d9 !important;
        }

        .text-gray-600 {
            color: #95aac9 !important;
        }

        .text-gray-700 {
            color: #6e84a3 !important;
        }

        .text-gray-800 {
            color: #3b506c !important;
        }

        .text-gray-900 {
            color: #283e59 !important;
        }

        .avatar {
            position: relative;
            display: inline-block;
            width: 3rem;
            height: 3rem;
            font-size: 1rem;
        }

        .avatar:after {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
        }

        .avatar-img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .avatar-title {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            line-height: 0;
            background-color: #b1c2d9;
            color: #fff;
        }

        .avatar-offline::before,
        .avatar-online::before {
            content: "";
            position: absolute;
            bottom: 5%;
            right: 5%;
            width: 20%;
            height: 20%;
            border-radius: 50%;
        }

        .avatar-offline .avatar-img,
        .avatar-online .avatar-img {
            -webkit-mask-size: 100% 100%;
            mask-size: 100% 100%;
        }

        .avatar-online::before {
            background-color: #00d97e;
        }

        .avatar-offline::before {
            background-color: #b1c2d9;
        }

        .avatar-xs {
            width: 1.625rem;
            height: 1.625rem;
            font-size: 0.54167rem;
        }

        .avatar-sm {
            width: 2.5rem;
            height: 2.5rem;
            font-size: 0.83333rem;
        }

        .avatar-lg {
            width: 4rem;
            height: 4rem;
            font-size: 1.33333rem;
        }

        .avatar-xl {
            width: 5.125rem;
            height: 5.125rem;
            font-size: 1.70833rem;
        }

        .avatar-xxl {
            width: 5.125rem;
            height: 5.125rem;
            font-size: 1.70833rem;
        }

        @media (min-width: 768px) {
            .avatar-xxl {
                width: 8rem;
                height: 8rem;
                font-size: 2.66667rem;
            }
        }

        .avatar.avatar-4by3 {
            width: 4rem;
        }

        .avatar-xs.avatar-4by3 {
            width: 2.16667rem;
        }

        .avatar-sm.avatar-4by3 {
            width: 3.33333rem;
        }

        .avatar-lg.avatar-4by3 {
            width: 5.33333rem;
        }

        .avatar-xl.avatar-4by3 {
            width: 6.83333rem;
        }

        .avatar-xxl.avatar-4by3 {
            width: 10.66667rem;
        }

        .avatar-group {
            display: inline-flex;
        }

        .avatar-group .avatar + .avatar {
            margin-left: -0.75rem;
        }

        .avatar-group .avatar-xs + .avatar-xs {
            margin-left: -0.40625rem;
        }

        .avatar-group .avatar-sm + .avatar-sm {
            margin-left: -0.625rem;
        }

        .avatar-group .avatar-lg + .avatar-lg {
            margin-left: -1rem;
        }

        .avatar-group .avatar-xl + .avatar-xl {
            margin-left: -1.28125rem;
        }

        .avatar-group .avatar-xxl + .avatar-xxl {
            margin-left: -2rem;
        }

        .avatar-group .avatar:not(:last-child) {
            -webkit-mask-size: 100% 100%;
            mask-size: 100% 100%;
        }

        .avatar-group .avatar:hover {
            -webkit-mask-image: none;
            mask-image: none;
            z-index: 1;
        }

        .avatar-group .avatar:hover + .avatar {
            -webkit-mask-size: 100% 100%;
            mask-size: 100% 100%;
        }

        .chart {
            position: relative;
            height: 300px;
        }

        .chart.chart-appended {
            height: calc(300px - 3.71875rem);
        }

        .chart-sm {
            height: 225px;
        }

        .chart-sm.chart-appended {
            height: calc(225px - 3.71875rem);
        }

        .chart-sparkline {
            width: 75px;
            height: 35px;
        }

        .chart-legend {
            display: flex;
            justify-content: center;
            margin-top: 2.5rem;
            font-size: 0.8125rem;
            text-align: center;
            color: #95aac9;
        }

        .chart-legend-item {
            display: inline-flex;
            align-items: center;
        }

        .chart-legend-item + .chart-legend-item {
            margin-left: 1rem;
        }

        .chart-legend-indicator {
            display: inline-block;
            width: 0.5rem;
            height: 0.5rem;
            margin-right: 0.375rem;
            border-radius: 50%;
        }

        #chart-tooltip {
            z-index: 0;
        }

        #chart-tooltip .arrow {
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateX(-0.5rem);
        }

        .comment {
            margin-bottom: 1rem;
        }

        .comment-body {
            display: inline-block;
            padding: 1rem 1.25rem;
            background-color: #f9fbfd;
            border-radius: 0.5rem;
        }

        .comment-time {
            display: block;
            margin-bottom: 0.5625rem;
            font-size: 0.625rem;
            color: #95aac9;
        }

        .comment-text {
            font-size: 0.8125rem;
        }

        .comment-text:last-child {
            margin-bottom: 0;
        }

        .checklist {
            outline: 0;
        }

        .checklist-control {
            display: flex;
            flex-wrap: nowrap;
            outline: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .checklist-control .custom-control-input:checked ~ .custom-control-caption {
            text-decoration: line-through;
            color: #6e84a3;
        }

        .checklist-control + .checklist-control {
            margin-top: 0.75rem;
        }

        .checklist-control:first-child[style*="display: none"] + .checklist-control {
            margin-top: 0;
        }

        .checklist-control.draggable-mirror {
            z-index: 1030;
        }

        .checklist-control.draggable-source--is-dragging {
            opacity: 0.2;
        }

        .header {
            margin-bottom: 2rem;
        }

        .header-img-top {
            width: 100%;
            height: auto;
        }

        .header-body {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #e3ebf6;
        }

        .header.bg-dark .header-body,
        .header.bg-hero .header-body {
            border-bottom-color: rgba(227, 235, 246, 0.1);
        }

        .header-footer {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .header-pretitle {
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #95aac9;
        }

        .header-title,
        .header-title a,
        .api h1 {
            margin: 1rem 0;
            color: #3a042e;
            font-weight: 600;
            font-size: 36px;
        }

        .header-title-2,
        .header-title-2 a {
            margin: 1rem 0;
            color: #3a042e;
            font-size: 20px;
            font-weight: 400px;
        }

        .header-subtitle1 {
            margin-bottom: 0;
            color: #3a042e;
            font-weight: 500;
            font-size: 24px;
        }

        .header-subtitle {
            margin-top: 0.375rem;
            margin-bottom: 0;
            color: #95aac9;
            font-size: 24px;
            font-weight: 400;
        }

        .header-subtitle h2 {
            font-size: 28px;
            font-weight: 500 !important;
        }

        .header-tabs {
            margin-bottom: -1.5rem;
            border-bottom-width: 0;
        }

        .header-tabs .nav-link {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .icon {
            display: inline-block;
        }

        .icon > .fe {
            display: block;
            min-width: 1.5em;
            min-height: 1.5em;
            text-align: center;
            font-size: 1.0625rem;
        }

        .icon.active {
            position: relative;
        }

        .icon.active > .fe {
            -webkit-mask-size: 100% 100%;
            mask-size: 100% 100%;
        }

        .icon.active::after {
            content: "";
            position: absolute;
            top: 10%;
            right: 20%;
            width: 20%;
            height: 20%;
            border-radius: 50%;
            background-color: #2c7be5;
        }

        @media (min-width: 768px) {
            .navbar-vertical-sm:not([style*="display: none"]) ~ .main-content .container,
            .navbar-vertical-sm:not([style*="display: none"]) ~ .main-content .container-fluid,
            .navbar-vertical-sm:not([style*="display: none"]) ~ .main-content .container-lg,
            .navbar-vertical-sm:not([style*="display: none"]) ~ .main-content .container-md,
            .navbar-vertical-sm:not([style*="display: none"]) ~ .main-content .container-sm,
            .navbar-vertical-sm:not([style*="display: none"]) ~ .main-content .container-xl,
            .navbar-vertical:not([style*="display: none"]) ~ .main-content .container,
            .navbar-vertical:not([style*="display: none"]) ~ .main-content .container-fluid,
            .navbar-vertical:not([style*="display: none"]) ~ .main-content .container-lg,
            .navbar-vertical:not([style*="display: none"]) ~ .main-content .container-md,
            .navbar-vertical:not([style*="display: none"]) ~ .main-content .container-sm,
            .navbar-vertical:not([style*="display: none"]) ~ .main-content .container-xl {
                padding-left: 36px !important;
                padding-right: 36px !important;
            }
        }

        .navbar-vertical.navbar-expand-xs.fixed-left:not([style*="display: none"]) ~ .main-content {
            margin-left: 250px;
        }

        .navbar-vertical.navbar-expand-xs.fixed-right:not([style*="display: none"]) ~ .main-content {
            margin-right: 250px;
        }

        @media (min-width: 576px) {
            .navbar-vertical.navbar-expand-sm.fixed-left:not([style*="display: none"]) ~ .main-content {
                margin-left: 250px;
            }

            .navbar-vertical.navbar-expand-sm.fixed-right:not([style*="display: none"]) ~ .main-content {
                margin-right: 250px;
            }
        }

        @media (min-width: 768px) {
            .navbar-vertical.navbar-expand-md.fixed-left:not([style*="display: none"]) ~ .main-content {
                margin-left: 250px;
            }

            .navbar-vertical.navbar-expand-md.fixed-right:not([style*="display: none"]) ~ .main-content {
                margin-right: 250px;
            }
        }

        @media (min-width: 992px) {
            .navbar-vertical.navbar-expand-lg.fixed-left:not([style*="display: none"]) ~ .main-content {
                margin-left: 250px;
            }

            .navbar-vertical.navbar-expand-lg.fixed-right:not([style*="display: none"]) ~ .main-content {
                margin-right: 250px;
            }
        }

        @media (min-width: 1200px) {
            .navbar-vertical.navbar-expand-xl.fixed-left:not([style*="display: none"]) ~ .main-content {
                margin-left: 250px;
            }

            .navbar-vertical.navbar-expand-xl.fixed-right:not([style*="display: none"]) ~ .main-content {
                margin-right: 250px;
            }
        }

        .navbar-vertical-sm.navbar-expand-xs.fixed-left:not([style*="display: none"]) ~ .main-content {
            margin-left: 66px;
        }

        .navbar-vertical-sm.navbar-expand-xs.fixed-right:not([style*="display: none"]) ~ .main-content {
            margin-right: 66px;
        }

        @media (min-width: 576px) {
            .navbar-vertical-sm.navbar-expand-sm.fixed-left:not([style*="display: none"]) ~ .main-content {
                margin-left: 66px;
            }

            .navbar-vertical-sm.navbar-expand-sm.fixed-right:not([style*="display: none"]) ~ .main-content {
                margin-right: 66px;
            }
        }

        @media (min-width: 768px) {
            .navbar-vertical-sm.navbar-expand-md.fixed-left:not([style*="display: none"]) ~ .main-content {
                margin-left: 66px;
            }

            .navbar-vertical-sm.navbar-expand-md.fixed-right:not([style*="display: none"]) ~ .main-content {
                margin-right: 66px;
            }
        }

        @media (min-width: 992px) {
            .navbar-vertical-sm.navbar-expand-lg.fixed-left:not([style*="display: none"]) ~ .main-content {
                margin-left: 66px;
            }

            .navbar-vertical-sm.navbar-expand-lg.fixed-right:not([style*="display: none"]) ~ .main-content {
                margin-right: 66px;
            }
        }

        @media (min-width: 1200px) {
            .navbar-vertical-sm.navbar-expand-xl.fixed-left:not([style*="display: none"]) ~ .main-content {
                margin-left: 66px;
            }

            .navbar-vertical-sm.navbar-expand-xl.fixed-right:not([style*="display: none"]) ~ .main-content {
                margin-right: 66px;
            }
        }

        @media (min-width: 768px) {
            .navbar-vertical:not(.navbar-vertical-sm):not([style*="display: none"]) ~ .main-content .list-alert {
                left: calc(50% + 125px);
            }
        }

        #topbar {
            width: 100%;
            z-index: 9999;
        }

        .card-img {
            max-width: 360px;
            height: 250px;
            max-height: 250px;
        }

        .search .form-control,
        .search .input-group-prepend,
        .search .input-group-text {
            background-color: rgba(242, 243, 247, 0.5) !important;
        }

        .search .form-control,
        .search .input-group-prepend {
            border-radius: 4px;
            border: 0 !important;
        }

        .search .form-control {
            height: 36px !important;
            padding: 1.4rem;
        }

        .search .input-group-text {
            border: 0;
        }

        .nav-fixed {
            position: fixed;
            left: 0;
        }

        /* p {
  font-size: 16px !important;
  color: #3c4257;
  opacity: 85%;
} */

        blockquote > p {
            margin: 0;
            font-family: Calibre;
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 24px;
            margin-bottom: 1rem;
            color: #2b292d;
        }

        .list-header {
            color: #2b292d;
            font-size: 18px;
        }

        .last-card {
            border: 0.5px solid rgba(145, 158, 171, 0.5);
            border-radius: 4px;
            height: 116px;
            width: 352px;
            box-sizing: border-box;
        }

        /* .dashboard-img {
  width: 66.67%;
} */

        .row-last {
            display: flex;
            flex-wrap: wrap;
            margin-right: -12px;
            margin-left: -12px;
            width: 117%;
        }

        .card.table tr > td:first-child {
            min-width: 200px;
        }

        .docsify-tabs__content {
            max-height: 400px;
            border: 0 !important;
        }

        .api h2,
        .api h3 {
            margin-top: 0.375rem;
            margin-bottom: 0;
            color: #95aac9;
            font-size: 1.25rem;
            font-weight: 500;
            color: #3a042e !important;
        }

        .sub {
            margin-left: 1.5rem;
        }

        .app-sub-sidebar {
        }

        .sub li {
            padding-left: 1.2rem;
            border-left: 2px solid #919eab47;
            margin: 0;
            padding-bottom: 0.5rem;
            margin-left: 1rem;
            border-color: #FF7276;
        }

        .sub li.active {
            border-color: #FF7276
        }

        img.ionicon {
            height: 30px;
        }

        .title-icon {
            width: 40px;
        }

        .nav-button {
            font-size: 20px;
        }

        .nav-button.btn-primary {
            font-size: 20px;
            width: 80px;
            border-radius: 4px;
        }

        p {
            line-height: 2rem;
        }

        .api p {
            max-width: 90%;
        }

        .state-diagram {
            border: 1px solid #3a042e;
            padding: 2rem;
            width: 700px;
            margin-bottom: 2rem;
        }
    </style>
    <style data-savepage-href="../../assets/css/animate.css">
        @charset "UTF-8";
        /*!
 * animate.css - https://animate.style/
 * Version - 4.1.1
 * Licensed under the MIT license - https://opensource.org/licenses/MIT
 *
 * Copyright (c) 2021 Animate.css
 */

        :root {
            --animate-duration: 1s;
            --animate-delay: 1s;
            --animate-repeat: 1;
        }

        .animate__animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-duration: var(--animate-duration);
            animation-duration: var(--animate-duration);
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .animate__animated.animate__infinite {
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
        }

        .animate__animated.animate__repeat-1 {
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            -webkit-animation-iteration-count: var(--animate-repeat);
            animation-iteration-count: var(--animate-repeat);
        }

        .animate__animated.animate__repeat-2 {
            -webkit-animation-iteration-count: 2;
            animation-iteration-count: 2;
            -webkit-animation-iteration-count: calc(var(--animate-repeat) * 2);
            animation-iteration-count: calc(var(--animate-repeat) * 2);
        }

        .animate__animated.animate__repeat-3 {
            -webkit-animation-iteration-count: 3;
            animation-iteration-count: 3;
            -webkit-animation-iteration-count: calc(var(--animate-repeat) * 3);
            animation-iteration-count: calc(var(--animate-repeat) * 3);
        }

        .animate__animated.animate__delay-1s {
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
            -webkit-animation-delay: var(--animate-delay);
            animation-delay: var(--animate-delay);
        }

        .animate__animated.animate__delay-2s {
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-delay: calc(var(--animate-delay) * 2);
            animation-delay: calc(var(--animate-delay) * 2);
        }

        .animate__animated.animate__delay-3s {
            -webkit-animation-delay: 3s;
            animation-delay: 3s;
            -webkit-animation-delay: calc(var(--animate-delay) * 3);
            animation-delay: calc(var(--animate-delay) * 3);
        }

        .animate__animated.animate__delay-4s {
            -webkit-animation-delay: 4s;
            animation-delay: 4s;
            -webkit-animation-delay: calc(var(--animate-delay) * 4);
            animation-delay: calc(var(--animate-delay) * 4);
        }

        .animate__animated.animate__delay-5s {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
            -webkit-animation-delay: calc(var(--animate-delay) * 5);
            animation-delay: calc(var(--animate-delay) * 5);
        }

        .animate__animated.animate__faster {
            -webkit-animation-duration: 0.5s;
            animation-duration: 0.5s;
            -webkit-animation-duration: calc(var(--animate-duration) / 2);
            animation-duration: calc(var(--animate-duration) / 2);
        }

        .animate__animated.animate__fast {
            -webkit-animation-duration: 0.8s;
            animation-duration: 0.8s;
            -webkit-animation-duration: calc(var(--animate-duration) * 0.8);
            animation-duration: calc(var(--animate-duration) * 0.8);
        }

        .animate__animated.animate__slow {
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-duration: calc(var(--animate-duration) * 2);
            animation-duration: calc(var(--animate-duration) * 2);
        }

        .animate__animated.animate__slower {
            -webkit-animation-duration: 3s;
            animation-duration: 3s;
            -webkit-animation-duration: calc(var(--animate-duration) * 3);
            animation-duration: calc(var(--animate-duration) * 3);
        }

        @media (prefers-reduced-motion: reduce), print {
            .animate__animated {
                -webkit-animation-duration: 1ms !important;
                animation-duration: 1ms !important;
                -webkit-transition-duration: 1ms !important;
                transition-duration: 1ms !important;
                -webkit-animation-iteration-count: 1 !important;
                animation-iteration-count: 1 !important;
            }

            .animate__animated[class*="Out"] {
                opacity: 0;
            }
        }

        @-webkit-keyframes bounce {
            0%,
            20%,
            53%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            40%,
            43% {
                -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
                transform: translate3d(0, -30px, 0) scaleY(1.1);
            }
            70% {
                -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
                transform: translate3d(0, -15px, 0) scaleY(1.05);
            }
            80% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                -webkit-transform: translateZ(0) scaleY(0.95);
                transform: translateZ(0) scaleY(0.95);
            }
            90% {
                -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
                transform: translate3d(0, -4px, 0) scaleY(1.02);
            }
        }

        @keyframes bounce {
            0%,
            20%,
            53%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            40%,
            43% {
                -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
                transform: translate3d(0, -30px, 0) scaleY(1.1);
            }
            70% {
                -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
                transform: translate3d(0, -15px, 0) scaleY(1.05);
            }
            80% {
                -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                -webkit-transform: translateZ(0) scaleY(0.95);
                transform: translateZ(0) scaleY(0.95);
            }
            90% {
                -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
                transform: translate3d(0, -4px, 0) scaleY(1.02);
            }
        }

        .animate__bounce {
            -webkit-animation-name: bounce;
            animation-name: bounce;
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
        }

        @-webkit-keyframes flash {
            0%,
            50%,
            to {
                opacity: 1;
            }
            25%,
            75% {
                opacity: 0;
            }
        }

        @keyframes flash {
            0%,
            50%,
            to {
                opacity: 1;
            }
            25%,
            75% {
                opacity: 0;
            }
        }

        .animate__flash {
            -webkit-animation-name: flash;
            animation-name: flash;
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05);
            }
            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
        }

        @keyframes pulse {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05);
            }
            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
        }

        .animate__pulse {
            -webkit-animation-name: pulse;
            animation-name: pulse;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
        }

        @-webkit-keyframes rubberBand {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
            30% {
                -webkit-transform: scale3d(1.25, 0.75, 1);
                transform: scale3d(1.25, 0.75, 1);
            }
            40% {
                -webkit-transform: scale3d(0.75, 1.25, 1);
                transform: scale3d(0.75, 1.25, 1);
            }
            50% {
                -webkit-transform: scale3d(1.15, 0.85, 1);
                transform: scale3d(1.15, 0.85, 1);
            }
            65% {
                -webkit-transform: scale3d(0.95, 1.05, 1);
                transform: scale3d(0.95, 1.05, 1);
            }
            75% {
                -webkit-transform: scale3d(1.05, 0.95, 1);
                transform: scale3d(1.05, 0.95, 1);
            }
            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
        }

        @keyframes rubberBand {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
            30% {
                -webkit-transform: scale3d(1.25, 0.75, 1);
                transform: scale3d(1.25, 0.75, 1);
            }
            40% {
                -webkit-transform: scale3d(0.75, 1.25, 1);
                transform: scale3d(0.75, 1.25, 1);
            }
            50% {
                -webkit-transform: scale3d(1.15, 0.85, 1);
                transform: scale3d(1.15, 0.85, 1);
            }
            65% {
                -webkit-transform: scale3d(0.95, 1.05, 1);
                transform: scale3d(0.95, 1.05, 1);
            }
            75% {
                -webkit-transform: scale3d(1.05, 0.95, 1);
                transform: scale3d(1.05, 0.95, 1);
            }
            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
        }

        .animate__rubberBand {
            -webkit-animation-name: rubberBand;
            animation-name: rubberBand;
        }

        @-webkit-keyframes shakeX {
            0%,
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
            }
            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
            }
        }

        @keyframes shakeX {
            0%,
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
            }
            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
            }
        }

        .animate__shakeX {
            -webkit-animation-name: shakeX;
            animation-name: shakeX;
        }

        @-webkit-keyframes shakeY {
            0%,
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0);
            }
            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }
        }

        @keyframes shakeY {
            0%,
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0);
            }
            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }
        }

        .animate__shakeY {
            -webkit-animation-name: shakeY;
            animation-name: shakeY;
        }

        @-webkit-keyframes headShake {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
            6.5% {
                -webkit-transform: translateX(-6px) rotateY(-9deg);
                transform: translateX(-6px) rotateY(-9deg);
            }
            18.5% {
                -webkit-transform: translateX(5px) rotateY(7deg);
                transform: translateX(5px) rotateY(7deg);
            }
            31.5% {
                -webkit-transform: translateX(-3px) rotateY(-5deg);
                transform: translateX(-3px) rotateY(-5deg);
            }
            43.5% {
                -webkit-transform: translateX(2px) rotateY(3deg);
                transform: translateX(2px) rotateY(3deg);
            }
            50% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }

        @keyframes headShake {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
            6.5% {
                -webkit-transform: translateX(-6px) rotateY(-9deg);
                transform: translateX(-6px) rotateY(-9deg);
            }
            18.5% {
                -webkit-transform: translateX(5px) rotateY(7deg);
                transform: translateX(5px) rotateY(7deg);
            }
            31.5% {
                -webkit-transform: translateX(-3px) rotateY(-5deg);
                transform: translateX(-3px) rotateY(-5deg);
            }
            43.5% {
                -webkit-transform: translateX(2px) rotateY(3deg);
                transform: translateX(2px) rotateY(3deg);
            }
            50% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }

        .animate__headShake {
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            -webkit-animation-name: headShake;
            animation-name: headShake;
        }

        @-webkit-keyframes swing {
            20% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }
            40% {
                -webkit-transform: rotate(-10deg);
                transform: rotate(-10deg);
            }
            60% {
                -webkit-transform: rotate(5deg);
                transform: rotate(5deg);
            }
            80% {
                -webkit-transform: rotate(-5deg);
                transform: rotate(-5deg);
            }
            to {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @keyframes swing {
            20% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }
            40% {
                -webkit-transform: rotate(-10deg);
                transform: rotate(-10deg);
            }
            60% {
                -webkit-transform: rotate(5deg);
                transform: rotate(5deg);
            }
            80% {
                -webkit-transform: rotate(-5deg);
                transform: rotate(-5deg);
            }
            to {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        .animate__swing {
            -webkit-transform-origin: top center;
            transform-origin: top center;
            -webkit-animation-name: swing;
            animation-name: swing;
        }

        @-webkit-keyframes tada {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
            10%,
            20% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate(-3deg);
                transform: scale3d(0.9, 0.9, 0.9) rotate(-3deg);
            }
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
            }
            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
            }
            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
        }

        @keyframes tada {
            0% {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
            10%,
            20% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate(-3deg);
                transform: scale3d(0.9, 0.9, 0.9) rotate(-3deg);
            }
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
            }
            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
            }
            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
        }

        .animate__tada {
            -webkit-animation-name: tada;
            animation-name: tada;
        }

        @-webkit-keyframes wobble {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            15% {
                -webkit-transform: translate3d(-25%, 0, 0) rotate(-5deg);
                transform: translate3d(-25%, 0, 0) rotate(-5deg);
            }
            30% {
                -webkit-transform: translate3d(20%, 0, 0) rotate(3deg);
                transform: translate3d(20%, 0, 0) rotate(3deg);
            }
            45% {
                -webkit-transform: translate3d(-15%, 0, 0) rotate(-3deg);
                transform: translate3d(-15%, 0, 0) rotate(-3deg);
            }
            60% {
                -webkit-transform: translate3d(10%, 0, 0) rotate(2deg);
                transform: translate3d(10%, 0, 0) rotate(2deg);
            }
            75% {
                -webkit-transform: translate3d(-5%, 0, 0) rotate(-1deg);
                transform: translate3d(-5%, 0, 0) rotate(-1deg);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes wobble {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            15% {
                -webkit-transform: translate3d(-25%, 0, 0) rotate(-5deg);
                transform: translate3d(-25%, 0, 0) rotate(-5deg);
            }
            30% {
                -webkit-transform: translate3d(20%, 0, 0) rotate(3deg);
                transform: translate3d(20%, 0, 0) rotate(3deg);
            }
            45% {
                -webkit-transform: translate3d(-15%, 0, 0) rotate(-3deg);
                transform: translate3d(-15%, 0, 0) rotate(-3deg);
            }
            60% {
                -webkit-transform: translate3d(10%, 0, 0) rotate(2deg);
                transform: translate3d(10%, 0, 0) rotate(2deg);
            }
            75% {
                -webkit-transform: translate3d(-5%, 0, 0) rotate(-1deg);
                transform: translate3d(-5%, 0, 0) rotate(-1deg);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__wobble {
            -webkit-animation-name: wobble;
            animation-name: wobble;
        }

        @-webkit-keyframes jello {
            0%,
            11.1%,
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            22.2% {
                -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
                transform: skewX(-12.5deg) skewY(-12.5deg);
            }
            33.3% {
                -webkit-transform: skewX(6.25deg) skewY(6.25deg);
                transform: skewX(6.25deg) skewY(6.25deg);
            }
            44.4% {
                -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
                transform: skewX(-3.125deg) skewY(-3.125deg);
            }
            55.5% {
                -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
                transform: skewX(1.5625deg) skewY(1.5625deg);
            }
            66.6% {
                -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
                transform: skewX(-0.78125deg) skewY(-0.78125deg);
            }
            77.7% {
                -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
                transform: skewX(0.390625deg) skewY(0.390625deg);
            }
            88.8% {
                -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
                transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
            }
        }

        @keyframes jello {
            0%,
            11.1%,
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            22.2% {
                -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
                transform: skewX(-12.5deg) skewY(-12.5deg);
            }
            33.3% {
                -webkit-transform: skewX(6.25deg) skewY(6.25deg);
                transform: skewX(6.25deg) skewY(6.25deg);
            }
            44.4% {
                -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
                transform: skewX(-3.125deg) skewY(-3.125deg);
            }
            55.5% {
                -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
                transform: skewX(1.5625deg) skewY(1.5625deg);
            }
            66.6% {
                -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
                transform: skewX(-0.78125deg) skewY(-0.78125deg);
            }
            77.7% {
                -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
                transform: skewX(0.390625deg) skewY(0.390625deg);
            }
            88.8% {
                -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
                transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
            }
        }

        .animate__jello {
            -webkit-animation-name: jello;
            animation-name: jello;
            -webkit-transform-origin: center;
            transform-origin: center;
        }

        @-webkit-keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }
            28% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }
            70% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }
            28% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }
            70% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        .animate__heartBeat {
            -webkit-animation-name: heartBeat;
            animation-name: heartBeat;
            -webkit-animation-duration: 1.3s;
            animation-duration: 1.3s;
            -webkit-animation-duration: calc(var(--animate-duration) * 1.3);
            animation-duration: calc(var(--animate-duration) * 1.3);
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
        }

        @-webkit-keyframes backInDown {
            0% {
                -webkit-transform: translateY(-1200px) scale(0.7);
                transform: translateY(-1200px) scale(0.7);
                opacity: 0.7;
            }
            80% {
                -webkit-transform: translateY(0) scale(0.7);
                transform: translateY(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes backInDown {
            0% {
                -webkit-transform: translateY(-1200px) scale(0.7);
                transform: translateY(-1200px) scale(0.7);
                opacity: 0.7;
            }
            80% {
                -webkit-transform: translateY(0) scale(0.7);
                transform: translateY(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        .animate__backInDown {
            -webkit-animation-name: backInDown;
            animation-name: backInDown;
        }

        @-webkit-keyframes backInLeft {
            0% {
                -webkit-transform: translateX(-2000px) scale(0.7);
                transform: translateX(-2000px) scale(0.7);
                opacity: 0.7;
            }
            80% {
                -webkit-transform: translateX(0) scale(0.7);
                transform: translateX(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes backInLeft {
            0% {
                -webkit-transform: translateX(-2000px) scale(0.7);
                transform: translateX(-2000px) scale(0.7);
                opacity: 0.7;
            }
            80% {
                -webkit-transform: translateX(0) scale(0.7);
                transform: translateX(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        .animate__backInLeft {
            -webkit-animation-name: backInLeft;
            animation-name: backInLeft;
        }

        @-webkit-keyframes backInRight {
            0% {
                -webkit-transform: translateX(2000px) scale(0.7);
                transform: translateX(2000px) scale(0.7);
                opacity: 0.7;
            }
            80% {
                -webkit-transform: translateX(0) scale(0.7);
                transform: translateX(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes backInRight {
            0% {
                -webkit-transform: translateX(2000px) scale(0.7);
                transform: translateX(2000px) scale(0.7);
                opacity: 0.7;
            }
            80% {
                -webkit-transform: translateX(0) scale(0.7);
                transform: translateX(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        .animate__backInRight {
            -webkit-animation-name: backInRight;
            animation-name: backInRight;
        }

        @-webkit-keyframes backInUp {
            0% {
                -webkit-transform: translateY(1200px) scale(0.7);
                transform: translateY(1200px) scale(0.7);
                opacity: 0.7;
            }
            80% {
                -webkit-transform: translateY(0) scale(0.7);
                transform: translateY(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes backInUp {
            0% {
                -webkit-transform: translateY(1200px) scale(0.7);
                transform: translateY(1200px) scale(0.7);
                opacity: 0.7;
            }
            80% {
                -webkit-transform: translateY(0) scale(0.7);
                transform: translateY(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
        }

        .animate__backInUp {
            -webkit-animation-name: backInUp;
            animation-name: backInUp;
        }

        @-webkit-keyframes backOutDown {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            20% {
                -webkit-transform: translateY(0) scale(0.7);
                transform: translateY(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: translateY(700px) scale(0.7);
                transform: translateY(700px) scale(0.7);
                opacity: 0.7;
            }
        }

        @keyframes backOutDown {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            20% {
                -webkit-transform: translateY(0) scale(0.7);
                transform: translateY(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: translateY(700px) scale(0.7);
                transform: translateY(700px) scale(0.7);
                opacity: 0.7;
            }
        }

        .animate__backOutDown {
            -webkit-animation-name: backOutDown;
            animation-name: backOutDown;
        }

        @-webkit-keyframes backOutLeft {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            20% {
                -webkit-transform: translateX(0) scale(0.7);
                transform: translateX(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: translateX(-2000px) scale(0.7);
                transform: translateX(-2000px) scale(0.7);
                opacity: 0.7;
            }
        }

        @keyframes backOutLeft {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            20% {
                -webkit-transform: translateX(0) scale(0.7);
                transform: translateX(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: translateX(-2000px) scale(0.7);
                transform: translateX(-2000px) scale(0.7);
                opacity: 0.7;
            }
        }

        .animate__backOutLeft {
            -webkit-animation-name: backOutLeft;
            animation-name: backOutLeft;
        }

        @-webkit-keyframes backOutRight {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            20% {
                -webkit-transform: translateX(0) scale(0.7);
                transform: translateX(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: translateX(2000px) scale(0.7);
                transform: translateX(2000px) scale(0.7);
                opacity: 0.7;
            }
        }

        @keyframes backOutRight {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            20% {
                -webkit-transform: translateX(0) scale(0.7);
                transform: translateX(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: translateX(2000px) scale(0.7);
                transform: translateX(2000px) scale(0.7);
                opacity: 0.7;
            }
        }

        .animate__backOutRight {
            -webkit-animation-name: backOutRight;
            animation-name: backOutRight;
        }

        @-webkit-keyframes backOutUp {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            20% {
                -webkit-transform: translateY(0) scale(0.7);
                transform: translateY(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: translateY(-700px) scale(0.7);
                transform: translateY(-700px) scale(0.7);
                opacity: 0.7;
            }
        }

        @keyframes backOutUp {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1;
            }
            20% {
                -webkit-transform: translateY(0) scale(0.7);
                transform: translateY(0) scale(0.7);
                opacity: 0.7;
            }
            to {
                -webkit-transform: translateY(-700px) scale(0.7);
                transform: translateY(-700px) scale(0.7);
                opacity: 0.7;
            }
        }

        .animate__backOutUp {
            -webkit-animation-name: backOutUp;
            animation-name: backOutUp;
        }

        @-webkit-keyframes bounceIn {
            0%,
            20%,
            40%,
            60%,
            80%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }
            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            40% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9);
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03);
            }
            80% {
                -webkit-transform: scale3d(0.97, 0.97, 0.97);
                transform: scale3d(0.97, 0.97, 0.97);
            }
            to {
                opacity: 1;
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
        }

        @keyframes bounceIn {
            0%,
            20%,
            40%,
            60%,
            80%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }
            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            40% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9);
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03);
            }
            80% {
                -webkit-transform: scale3d(0.97, 0.97, 0.97);
                transform: scale3d(0.97, 0.97, 0.97);
            }
            to {
                opacity: 1;
                -webkit-transform: scaleX(1);
                transform: scaleX(1);
            }
        }

        .animate__bounceIn {
            -webkit-animation-duration: 0.75s;
            animation-duration: 0.75s;
            -webkit-animation-duration: calc(var(--animate-duration) * 0.75);
            animation-duration: calc(var(--animate-duration) * 0.75);
            -webkit-animation-name: bounceIn;
            animation-name: bounceIn;
        }

        @-webkit-keyframes bounceInDown {
            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -3000px, 0) scaleY(3);
                transform: translate3d(0, -3000px, 0) scaleY(3);
            }
            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, 25px, 0) scaleY(0.9);
                transform: translate3d(0, 25px, 0) scaleY(0.9);
            }
            75% {
                -webkit-transform: translate3d(0, -10px, 0) scaleY(0.95);
                transform: translate3d(0, -10px, 0) scaleY(0.95);
            }
            90% {
                -webkit-transform: translate3d(0, 5px, 0) scaleY(0.985);
                transform: translate3d(0, 5px, 0) scaleY(0.985);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes bounceInDown {
            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -3000px, 0) scaleY(3);
                transform: translate3d(0, -3000px, 0) scaleY(3);
            }
            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, 25px, 0) scaleY(0.9);
                transform: translate3d(0, 25px, 0) scaleY(0.9);
            }
            75% {
                -webkit-transform: translate3d(0, -10px, 0) scaleY(0.95);
                transform: translate3d(0, -10px, 0) scaleY(0.95);
            }
            90% {
                -webkit-transform: translate3d(0, 5px, 0) scaleY(0.985);
                transform: translate3d(0, 5px, 0) scaleY(0.985);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__bounceInDown {
            -webkit-animation-name: bounceInDown;
            animation-name: bounceInDown;
        }

        @-webkit-keyframes bounceInLeft {
            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-3000px, 0, 0) scaleX(3);
                transform: translate3d(-3000px, 0, 0) scaleX(3);
            }
            60% {
                opacity: 1;
                -webkit-transform: translate3d(25px, 0, 0) scaleX(1);
                transform: translate3d(25px, 0, 0) scaleX(1);
            }
            75% {
                -webkit-transform: translate3d(-10px, 0, 0) scaleX(0.98);
                transform: translate3d(-10px, 0, 0) scaleX(0.98);
            }
            90% {
                -webkit-transform: translate3d(5px, 0, 0) scaleX(0.995);
                transform: translate3d(5px, 0, 0) scaleX(0.995);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes bounceInLeft {
            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-3000px, 0, 0) scaleX(3);
                transform: translate3d(-3000px, 0, 0) scaleX(3);
            }
            60% {
                opacity: 1;
                -webkit-transform: translate3d(25px, 0, 0) scaleX(1);
                transform: translate3d(25px, 0, 0) scaleX(1);
            }
            75% {
                -webkit-transform: translate3d(-10px, 0, 0) scaleX(0.98);
                transform: translate3d(-10px, 0, 0) scaleX(0.98);
            }
            90% {
                -webkit-transform: translate3d(5px, 0, 0) scaleX(0.995);
                transform: translate3d(5px, 0, 0) scaleX(0.995);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__bounceInLeft {
            -webkit-animation-name: bounceInLeft;
            animation-name: bounceInLeft;
        }

        @-webkit-keyframes bounceInRight {
            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }
            0% {
                opacity: 0;
                -webkit-transform: translate3d(3000px, 0, 0) scaleX(3);
                transform: translate3d(3000px, 0, 0) scaleX(3);
            }
            60% {
                opacity: 1;
                -webkit-transform: translate3d(-25px, 0, 0) scaleX(1);
                transform: translate3d(-25px, 0, 0) scaleX(1);
            }
            75% {
                -webkit-transform: translate3d(10px, 0, 0) scaleX(0.98);
                transform: translate3d(10px, 0, 0) scaleX(0.98);
            }
            90% {
                -webkit-transform: translate3d(-5px, 0, 0) scaleX(0.995);
                transform: translate3d(-5px, 0, 0) scaleX(0.995);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes bounceInRight {
            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }
            0% {
                opacity: 0;
                -webkit-transform: translate3d(3000px, 0, 0) scaleX(3);
                transform: translate3d(3000px, 0, 0) scaleX(3);
            }
            60% {
                opacity: 1;
                -webkit-transform: translate3d(-25px, 0, 0) scaleX(1);
                transform: translate3d(-25px, 0, 0) scaleX(1);
            }
            75% {
                -webkit-transform: translate3d(10px, 0, 0) scaleX(0.98);
                transform: translate3d(10px, 0, 0) scaleX(0.98);
            }
            90% {
                -webkit-transform: translate3d(-5px, 0, 0) scaleX(0.995);
                transform: translate3d(-5px, 0, 0) scaleX(0.995);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__bounceInRight {
            -webkit-animation-name: bounceInRight;
            animation-name: bounceInRight;
        }

        @-webkit-keyframes bounceInUp {
            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 3000px, 0) scaleY(5);
                transform: translate3d(0, 3000px, 0) scaleY(5);
            }
            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0) scaleY(0.9);
                transform: translate3d(0, -20px, 0) scaleY(0.9);
            }
            75% {
                -webkit-transform: translate3d(0, 10px, 0) scaleY(0.95);
                transform: translate3d(0, 10px, 0) scaleY(0.95);
            }
            90% {
                -webkit-transform: translate3d(0, -5px, 0) scaleY(0.985);
                transform: translate3d(0, -5px, 0) scaleY(0.985);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes bounceInUp {
            0%,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 3000px, 0) scaleY(5);
                transform: translate3d(0, 3000px, 0) scaleY(5);
            }
            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0) scaleY(0.9);
                transform: translate3d(0, -20px, 0) scaleY(0.9);
            }
            75% {
                -webkit-transform: translate3d(0, 10px, 0) scaleY(0.95);
                transform: translate3d(0, 10px, 0) scaleY(0.95);
            }
            90% {
                -webkit-transform: translate3d(0, -5px, 0) scaleY(0.985);
                transform: translate3d(0, -5px, 0) scaleY(0.985);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__bounceInUp {
            -webkit-animation-name: bounceInUp;
            animation-name: bounceInUp;
        }

        @-webkit-keyframes bounceOut {
            20% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9);
            }
            50%,
            55% {
                opacity: 1;
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            to {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }
        }

        @keyframes bounceOut {
            20% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9);
            }
            50%,
            55% {
                opacity: 1;
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            to {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }
        }

        .animate__bounceOut {
            -webkit-animation-duration: 0.75s;
            animation-duration: 0.75s;
            -webkit-animation-duration: calc(var(--animate-duration) * 0.75);
            animation-duration: calc(var(--animate-duration) * 0.75);
            -webkit-animation-name: bounceOut;
            animation-name: bounceOut;
        }

        @-webkit-keyframes bounceOutDown {
            20% {
                -webkit-transform: translate3d(0, 10px, 0) scaleY(0.985);
                transform: translate3d(0, 10px, 0) scaleY(0.985);
            }
            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0) scaleY(0.9);
                transform: translate3d(0, -20px, 0) scaleY(0.9);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0) scaleY(3);
                transform: translate3d(0, 2000px, 0) scaleY(3);
            }
        }

        @keyframes bounceOutDown {
            20% {
                -webkit-transform: translate3d(0, 10px, 0) scaleY(0.985);
                transform: translate3d(0, 10px, 0) scaleY(0.985);
            }
            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0) scaleY(0.9);
                transform: translate3d(0, -20px, 0) scaleY(0.9);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0) scaleY(3);
                transform: translate3d(0, 2000px, 0) scaleY(3);
            }
        }

        .animate__bounceOutDown {
            -webkit-animation-name: bounceOutDown;
            animation-name: bounceOutDown;
        }

        @-webkit-keyframes bounceOutLeft {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(20px, 0, 0) scaleX(0.9);
                transform: translate3d(20px, 0, 0) scaleX(0.9);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0) scaleX(2);
                transform: translate3d(-2000px, 0, 0) scaleX(2);
            }
        }

        @keyframes bounceOutLeft {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(20px, 0, 0) scaleX(0.9);
                transform: translate3d(20px, 0, 0) scaleX(0.9);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0) scaleX(2);
                transform: translate3d(-2000px, 0, 0) scaleX(2);
            }
        }

        .animate__bounceOutLeft {
            -webkit-animation-name: bounceOutLeft;
            animation-name: bounceOutLeft;
        }

        @-webkit-keyframes bounceOutRight {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(-20px, 0, 0) scaleX(0.9);
                transform: translate3d(-20px, 0, 0) scaleX(0.9);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0) scaleX(2);
                transform: translate3d(2000px, 0, 0) scaleX(2);
            }
        }

        @keyframes bounceOutRight {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(-20px, 0, 0) scaleX(0.9);
                transform: translate3d(-20px, 0, 0) scaleX(0.9);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0) scaleX(2);
                transform: translate3d(2000px, 0, 0) scaleX(2);
            }
        }

        .animate__bounceOutRight {
            -webkit-animation-name: bounceOutRight;
            animation-name: bounceOutRight;
        }

        @-webkit-keyframes bounceOutUp {
            20% {
                -webkit-transform: translate3d(0, -10px, 0) scaleY(0.985);
                transform: translate3d(0, -10px, 0) scaleY(0.985);
            }
            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, 20px, 0) scaleY(0.9);
                transform: translate3d(0, 20px, 0) scaleY(0.9);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0) scaleY(3);
                transform: translate3d(0, -2000px, 0) scaleY(3);
            }
        }

        @keyframes bounceOutUp {
            20% {
                -webkit-transform: translate3d(0, -10px, 0) scaleY(0.985);
                transform: translate3d(0, -10px, 0) scaleY(0.985);
            }
            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, 20px, 0) scaleY(0.9);
                transform: translate3d(0, 20px, 0) scaleY(0.9);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0) scaleY(3);
                transform: translate3d(0, -2000px, 0) scaleY(3);
            }
        }

        .animate__bounceOutUp {
            -webkit-animation-name: bounceOutUp;
            animation-name: bounceOutUp;
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .animate__fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
        }

        @-webkit-keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInDownBig {
            -webkit-animation-name: fadeInDownBig;
            animation-name: fadeInDownBig;
        }

        @-webkit-keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft;
        }

        @-webkit-keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInLeftBig {
            -webkit-animation-name: fadeInLeftBig;
            animation-name: fadeInLeftBig;
        }

        @-webkit-keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight;
        }

        @-webkit-keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInRightBig {
            -webkit-animation-name: fadeInRightBig;
            animation-name: fadeInRightBig;
        }

        @-webkit-keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
        }

        @-webkit-keyframes fadeInUpBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInUpBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInUpBig {
            -webkit-animation-name: fadeInUpBig;
            animation-name: fadeInUpBig;
        }

        @-webkit-keyframes fadeInTopLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, -100%, 0);
                transform: translate3d(-100%, -100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInTopLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, -100%, 0);
                transform: translate3d(-100%, -100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInTopLeft {
            -webkit-animation-name: fadeInTopLeft;
            animation-name: fadeInTopLeft;
        }

        @-webkit-keyframes fadeInTopRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, -100%, 0);
                transform: translate3d(100%, -100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInTopRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, -100%, 0);
                transform: translate3d(100%, -100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInTopRight {
            -webkit-animation-name: fadeInTopRight;
            animation-name: fadeInTopRight;
        }

        @-webkit-keyframes fadeInBottomLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 100%, 0);
                transform: translate3d(-100%, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInBottomLeft {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 100%, 0);
                transform: translate3d(-100%, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInBottomLeft {
            -webkit-animation-name: fadeInBottomLeft;
            animation-name: fadeInBottomLeft;
        }

        @-webkit-keyframes fadeInBottomRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 100%, 0);
                transform: translate3d(100%, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes fadeInBottomRight {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(100%, 100%, 0);
                transform: translate3d(100%, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__fadeInBottomRight {
            -webkit-animation-name: fadeInBottomRight;
            animation-name: fadeInBottomRight;
        }

        @-webkit-keyframes fadeOut {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        .animate__fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }

        @-webkit-keyframes fadeOutDown {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
        }

        @keyframes fadeOutDown {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
        }

        .animate__fadeOutDown {
            -webkit-animation-name: fadeOutDown;
            animation-name: fadeOutDown;
        }

        @-webkit-keyframes fadeOutDownBig {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
        }

        @keyframes fadeOutDownBig {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
        }

        .animate__fadeOutDownBig {
            -webkit-animation-name: fadeOutDownBig;
            animation-name: fadeOutDownBig;
        }

        @-webkit-keyframes fadeOutLeft {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        @keyframes fadeOutLeft {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        .animate__fadeOutLeft {
            -webkit-animation-name: fadeOutLeft;
            animation-name: fadeOutLeft;
        }

        @-webkit-keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
        }

        @keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
        }

        .animate__fadeOutLeftBig {
            -webkit-animation-name: fadeOutLeftBig;
            animation-name: fadeOutLeftBig;
        }

        @-webkit-keyframes fadeOutRight {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
        }

        @keyframes fadeOutRight {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
        }

        .animate__fadeOutRight {
            -webkit-animation-name: fadeOutRight;
            animation-name: fadeOutRight;
        }

        @-webkit-keyframes fadeOutRightBig {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
        }

        @keyframes fadeOutRightBig {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
        }

        .animate__fadeOutRightBig {
            -webkit-animation-name: fadeOutRightBig;
            animation-name: fadeOutRightBig;
        }

        @-webkit-keyframes fadeOutUp {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
        }

        @keyframes fadeOutUp {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
        }

        .animate__fadeOutUp {
            -webkit-animation-name: fadeOutUp;
            animation-name: fadeOutUp;
        }

        @-webkit-keyframes fadeOutUpBig {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
        }

        @keyframes fadeOutUpBig {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
        }

        .animate__fadeOutUpBig {
            -webkit-animation-name: fadeOutUpBig;
            animation-name: fadeOutUpBig;
        }

        @-webkit-keyframes fadeOutTopLeft {
            0% {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(-100%, -100%, 0);
                transform: translate3d(-100%, -100%, 0);
            }
        }

        @keyframes fadeOutTopLeft {
            0% {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(-100%, -100%, 0);
                transform: translate3d(-100%, -100%, 0);
            }
        }

        .animate__fadeOutTopLeft {
            -webkit-animation-name: fadeOutTopLeft;
            animation-name: fadeOutTopLeft;
        }

        @-webkit-keyframes fadeOutTopRight {
            0% {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, -100%, 0);
                transform: translate3d(100%, -100%, 0);
            }
        }

        @keyframes fadeOutTopRight {
            0% {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, -100%, 0);
                transform: translate3d(100%, -100%, 0);
            }
        }

        .animate__fadeOutTopRight {
            -webkit-animation-name: fadeOutTopRight;
            animation-name: fadeOutTopRight;
        }

        @-webkit-keyframes fadeOutBottomRight {
            0% {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, 100%, 0);
                transform: translate3d(100%, 100%, 0);
            }
        }

        @keyframes fadeOutBottomRight {
            0% {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, 100%, 0);
                transform: translate3d(100%, 100%, 0);
            }
        }

        .animate__fadeOutBottomRight {
            -webkit-animation-name: fadeOutBottomRight;
            animation-name: fadeOutBottomRight;
        }

        @-webkit-keyframes fadeOutBottomLeft {
            0% {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 100%, 0);
                transform: translate3d(-100%, 100%, 0);
            }
        }

        @keyframes fadeOutBottomLeft {
            0% {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 100%, 0);
                transform: translate3d(-100%, 100%, 0);
            }
        }

        .animate__fadeOutBottomLeft {
            -webkit-animation-name: fadeOutBottomLeft;
            animation-name: fadeOutBottomLeft;
        }

        @-webkit-keyframes flip {
            0% {
                -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
                transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
            40% {
                -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
                transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
            50% {
                -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
                transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            80% {
                -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translateZ(0) rotateY(0deg);
                transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translateZ(0) rotateY(0deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            to {
                -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
                transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
        }

        @keyframes flip {
            0% {
                -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
                transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
            40% {
                -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
                transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }
            50% {
                -webkit-transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
                transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            80% {
                -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translateZ(0) rotateY(0deg);
                transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translateZ(0) rotateY(0deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            to {
                -webkit-transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
                transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
        }

        .animate__animated.animate__flip {
            -webkit-backface-visibility: visible;
            backface-visibility: visible;
            -webkit-animation-name: flip;
            animation-name: flip;
        }

        @-webkit-keyframes flipInX {
            0% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
                opacity: 0;
            }
            40% {
                -webkit-transform: perspective(400px) rotateX(-20deg);
                transform: perspective(400px) rotateX(-20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            60% {
                -webkit-transform: perspective(400px) rotateX(10deg);
                transform: perspective(400px) rotateX(10deg);
                opacity: 1;
            }
            80% {
                -webkit-transform: perspective(400px) rotateX(-5deg);
                transform: perspective(400px) rotateX(-5deg);
            }
            to {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        @keyframes flipInX {
            0% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
                opacity: 0;
            }
            40% {
                -webkit-transform: perspective(400px) rotateX(-20deg);
                transform: perspective(400px) rotateX(-20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            60% {
                -webkit-transform: perspective(400px) rotateX(10deg);
                transform: perspective(400px) rotateX(10deg);
                opacity: 1;
            }
            80% {
                -webkit-transform: perspective(400px) rotateX(-5deg);
                transform: perspective(400px) rotateX(-5deg);
            }
            to {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        .animate__flipInX {
            -webkit-backface-visibility: visible !important;
            backface-visibility: visible !important;
            -webkit-animation-name: flipInX;
            animation-name: flipInX;
        }

        @-webkit-keyframes flipInY {
            0% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
                opacity: 0;
            }
            40% {
                -webkit-transform: perspective(400px) rotateY(-20deg);
                transform: perspective(400px) rotateY(-20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            60% {
                -webkit-transform: perspective(400px) rotateY(10deg);
                transform: perspective(400px) rotateY(10deg);
                opacity: 1;
            }
            80% {
                -webkit-transform: perspective(400px) rotateY(-5deg);
                transform: perspective(400px) rotateY(-5deg);
            }
            to {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        @keyframes flipInY {
            0% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
                opacity: 0;
            }
            40% {
                -webkit-transform: perspective(400px) rotateY(-20deg);
                transform: perspective(400px) rotateY(-20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
            60% {
                -webkit-transform: perspective(400px) rotateY(10deg);
                transform: perspective(400px) rotateY(10deg);
                opacity: 1;
            }
            80% {
                -webkit-transform: perspective(400px) rotateY(-5deg);
                transform: perspective(400px) rotateY(-5deg);
            }
            to {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        .animate__flipInY {
            -webkit-backface-visibility: visible !important;
            backface-visibility: visible !important;
            -webkit-animation-name: flipInY;
            animation-name: flipInY;
        }

        @-webkit-keyframes flipOutX {
            0% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
            30% {
                -webkit-transform: perspective(400px) rotateX(-20deg);
                transform: perspective(400px) rotateX(-20deg);
                opacity: 1;
            }
            to {
                -webkit-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                opacity: 0;
            }
        }

        @keyframes flipOutX {
            0% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
            30% {
                -webkit-transform: perspective(400px) rotateX(-20deg);
                transform: perspective(400px) rotateX(-20deg);
                opacity: 1;
            }
            to {
                -webkit-transform: perspective(400px) rotateX(90deg);
                transform: perspective(400px) rotateX(90deg);
                opacity: 0;
            }
        }

        .animate__flipOutX {
            -webkit-animation-duration: 0.75s;
            animation-duration: 0.75s;
            -webkit-animation-duration: calc(var(--animate-duration) * 0.75);
            animation-duration: calc(var(--animate-duration) * 0.75);
            -webkit-animation-name: flipOutX;
            animation-name: flipOutX;
            -webkit-backface-visibility: visible !important;
            backface-visibility: visible !important;
        }

        @-webkit-keyframes flipOutY {
            0% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
            30% {
                -webkit-transform: perspective(400px) rotateY(-15deg);
                transform: perspective(400px) rotateY(-15deg);
                opacity: 1;
            }
            to {
                -webkit-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                opacity: 0;
            }
        }

        @keyframes flipOutY {
            0% {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
            30% {
                -webkit-transform: perspective(400px) rotateY(-15deg);
                transform: perspective(400px) rotateY(-15deg);
                opacity: 1;
            }
            to {
                -webkit-transform: perspective(400px) rotateY(90deg);
                transform: perspective(400px) rotateY(90deg);
                opacity: 0;
            }
        }

        .animate__flipOutY {
            -webkit-animation-duration: 0.75s;
            animation-duration: 0.75s;
            -webkit-animation-duration: calc(var(--animate-duration) * 0.75);
            animation-duration: calc(var(--animate-duration) * 0.75);
            -webkit-backface-visibility: visible !important;
            backface-visibility: visible !important;
            -webkit-animation-name: flipOutY;
            animation-name: flipOutY;
        }

        @-webkit-keyframes lightSpeedInRight {
            0% {
                -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
                transform: translate3d(100%, 0, 0) skewX(-30deg);
                opacity: 0;
            }
            60% {
                -webkit-transform: skewX(20deg);
                transform: skewX(20deg);
                opacity: 1;
            }
            80% {
                -webkit-transform: skewX(-5deg);
                transform: skewX(-5deg);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes lightSpeedInRight {
            0% {
                -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
                transform: translate3d(100%, 0, 0) skewX(-30deg);
                opacity: 0;
            }
            60% {
                -webkit-transform: skewX(20deg);
                transform: skewX(20deg);
                opacity: 1;
            }
            80% {
                -webkit-transform: skewX(-5deg);
                transform: skewX(-5deg);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__lightSpeedInRight {
            -webkit-animation-name: lightSpeedInRight;
            animation-name: lightSpeedInRight;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
        }

        @-webkit-keyframes lightSpeedInLeft {
            0% {
                -webkit-transform: translate3d(-100%, 0, 0) skewX(30deg);
                transform: translate3d(-100%, 0, 0) skewX(30deg);
                opacity: 0;
            }
            60% {
                -webkit-transform: skewX(-20deg);
                transform: skewX(-20deg);
                opacity: 1;
            }
            80% {
                -webkit-transform: skewX(5deg);
                transform: skewX(5deg);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes lightSpeedInLeft {
            0% {
                -webkit-transform: translate3d(-100%, 0, 0) skewX(30deg);
                transform: translate3d(-100%, 0, 0) skewX(30deg);
                opacity: 0;
            }
            60% {
                -webkit-transform: skewX(-20deg);
                transform: skewX(-20deg);
                opacity: 1;
            }
            80% {
                -webkit-transform: skewX(5deg);
                transform: skewX(5deg);
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__lightSpeedInLeft {
            -webkit-animation-name: lightSpeedInLeft;
            animation-name: lightSpeedInLeft;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
        }

        @-webkit-keyframes lightSpeedOutRight {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
                transform: translate3d(100%, 0, 0) skewX(30deg);
                opacity: 0;
            }
        }

        @keyframes lightSpeedOutRight {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
                transform: translate3d(100%, 0, 0) skewX(30deg);
                opacity: 0;
            }
        }

        .animate__lightSpeedOutRight {
            -webkit-animation-name: lightSpeedOutRight;
            animation-name: lightSpeedOutRight;
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }

        @-webkit-keyframes lightSpeedOutLeft {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: translate3d(-100%, 0, 0) skewX(-30deg);
                transform: translate3d(-100%, 0, 0) skewX(-30deg);
                opacity: 0;
            }
        }

        @keyframes lightSpeedOutLeft {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: translate3d(-100%, 0, 0) skewX(-30deg);
                transform: translate3d(-100%, 0, 0) skewX(-30deg);
                opacity: 0;
            }
        }

        .animate__lightSpeedOutLeft {
            -webkit-animation-name: lightSpeedOutLeft;
            animation-name: lightSpeedOutLeft;
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
        }

        @-webkit-keyframes rotateIn {
            0% {
                -webkit-transform: rotate(-200deg);
                transform: rotate(-200deg);
                opacity: 0;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                opacity: 1;
            }
        }

        @keyframes rotateIn {
            0% {
                -webkit-transform: rotate(-200deg);
                transform: rotate(-200deg);
                opacity: 0;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                opacity: 1;
            }
        }

        .animate__rotateIn {
            -webkit-animation-name: rotateIn;
            animation-name: rotateIn;
            -webkit-transform-origin: center;
            transform-origin: center;
        }

        @-webkit-keyframes rotateInDownLeft {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                opacity: 0;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                opacity: 1;
            }
        }

        @keyframes rotateInDownLeft {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                opacity: 0;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                opacity: 1;
            }
        }

        .animate__rotateInDownLeft {
            -webkit-animation-name: rotateInDownLeft;
            animation-name: rotateInDownLeft;
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
        }

        @-webkit-keyframes rotateInDownRight {
            0% {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                opacity: 0;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                opacity: 1;
            }
        }

        @keyframes rotateInDownRight {
            0% {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                opacity: 0;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                opacity: 1;
            }
        }

        .animate__rotateInDownRight {
            -webkit-animation-name: rotateInDownRight;
            animation-name: rotateInDownRight;
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
        }

        @-webkit-keyframes rotateInUpLeft {
            0% {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                opacity: 0;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                opacity: 1;
            }
        }

        @keyframes rotateInUpLeft {
            0% {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                opacity: 0;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                opacity: 1;
            }
        }

        .animate__rotateInUpLeft {
            -webkit-animation-name: rotateInUpLeft;
            animation-name: rotateInUpLeft;
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
        }

        @-webkit-keyframes rotateInUpRight {
            0% {
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                opacity: 1;
            }
        }

        @keyframes rotateInUpRight {
            0% {
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
                opacity: 0;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                opacity: 1;
            }
        }

        .animate__rotateInUpRight {
            -webkit-animation-name: rotateInUpRight;
            animation-name: rotateInUpRight;
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
        }

        @-webkit-keyframes rotateOut {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: rotate(200deg);
                transform: rotate(200deg);
                opacity: 0;
            }
        }

        @keyframes rotateOut {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: rotate(200deg);
                transform: rotate(200deg);
                opacity: 0;
            }
        }

        .animate__rotateOut {
            -webkit-animation-name: rotateOut;
            animation-name: rotateOut;
            -webkit-transform-origin: center;
            transform-origin: center;
        }

        @-webkit-keyframes rotateOutDownLeft {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutDownLeft {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                opacity: 0;
            }
        }

        .animate__rotateOutDownLeft {
            -webkit-animation-name: rotateOutDownLeft;
            animation-name: rotateOutDownLeft;
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
        }

        @-webkit-keyframes rotateOutDownRight {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutDownRight {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                opacity: 0;
            }
        }

        .animate__rotateOutDownRight {
            -webkit-animation-name: rotateOutDownRight;
            animation-name: rotateOutDownRight;
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
        }

        @-webkit-keyframes rotateOutUpLeft {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutUpLeft {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                opacity: 0;
            }
        }

        .animate__rotateOutUpLeft {
            -webkit-animation-name: rotateOutUpLeft;
            animation-name: rotateOutUpLeft;
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
        }

        @-webkit-keyframes rotateOutUpRight {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutUpRight {
            0% {
                opacity: 1;
            }
            to {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
                opacity: 0;
            }
        }

        .animate__rotateOutUpRight {
            -webkit-animation-name: rotateOutUpRight;
            animation-name: rotateOutUpRight;
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
        }

        @-webkit-keyframes hinge {
            0% {
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }
            20%,
            60% {
                -webkit-transform: rotate(80deg);
                transform: rotate(80deg);
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }
            40%,
            80% {
                -webkit-transform: rotate(60deg);
                transform: rotate(60deg);
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
                opacity: 1;
            }
            to {
                -webkit-transform: translate3d(0, 700px, 0);
                transform: translate3d(0, 700px, 0);
                opacity: 0;
            }
        }

        @keyframes hinge {
            0% {
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }
            20%,
            60% {
                -webkit-transform: rotate(80deg);
                transform: rotate(80deg);
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }
            40%,
            80% {
                -webkit-transform: rotate(60deg);
                transform: rotate(60deg);
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
                opacity: 1;
            }
            to {
                -webkit-transform: translate3d(0, 700px, 0);
                transform: translate3d(0, 700px, 0);
                opacity: 0;
            }
        }

        .animate__hinge {
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-duration: calc(var(--animate-duration) * 2);
            animation-duration: calc(var(--animate-duration) * 2);
            -webkit-animation-name: hinge;
            animation-name: hinge;
            -webkit-transform-origin: top left;
            transform-origin: top left;
        }

        @-webkit-keyframes jackInTheBox {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.1) rotate(30deg);
                transform: scale(0.1) rotate(30deg);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
            }
            50% {
                -webkit-transform: rotate(-10deg);
                transform: rotate(-10deg);
            }
            70% {
                -webkit-transform: rotate(3deg);
                transform: rotate(3deg);
            }
            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes jackInTheBox {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.1) rotate(30deg);
                transform: scale(0.1) rotate(30deg);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
            }
            50% {
                -webkit-transform: rotate(-10deg);
                transform: rotate(-10deg);
            }
            70% {
                -webkit-transform: rotate(3deg);
                transform: rotate(3deg);
            }
            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        .animate__jackInTheBox {
            -webkit-animation-name: jackInTheBox;
            animation-name: jackInTheBox;
        }

        @-webkit-keyframes rollIn {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0) rotate(-120deg);
                transform: translate3d(-100%, 0, 0) rotate(-120deg);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes rollIn {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0) rotate(-120deg);
                transform: translate3d(-100%, 0, 0) rotate(-120deg);
            }
            to {
                opacity: 1;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__rollIn {
            -webkit-animation-name: rollIn;
            animation-name: rollIn;
        }

        @-webkit-keyframes rollOut {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0) rotate(120deg);
                transform: translate3d(100%, 0, 0) rotate(120deg);
            }
        }

        @keyframes rollOut {
            0% {
                opacity: 1;
            }
            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0) rotate(120deg);
                transform: translate3d(100%, 0, 0) rotate(120deg);
            }
        }

        .animate__rollOut {
            -webkit-animation-name: rollOut;
            animation-name: rollOut;
        }

        @-webkit-keyframes zoomIn {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }
            50% {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }
            50% {
                opacity: 1;
            }
        }

        .animate__zoomIn {
            -webkit-animation-name: zoomIn;
            animation-name: zoomIn;
        }

        @-webkit-keyframes zoomInDown {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomInDown {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        .animate__zoomInDown {
            -webkit-animation-name: zoomInDown;
            animation-name: zoomInDown;
        }

        @-webkit-keyframes zoomInLeft {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomInLeft {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        .animate__zoomInLeft {
            -webkit-animation-name: zoomInLeft;
            animation-name: zoomInLeft;
        }

        @-webkit-keyframes zoomInRight {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomInRight {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        .animate__zoomInRight {
            -webkit-animation-name: zoomInRight;
            animation-name: zoomInRight;
        }

        @-webkit-keyframes zoomInUp {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomInUp {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        .animate__zoomInUp {
            -webkit-animation-name: zoomInUp;
            animation-name: zoomInUp;
        }

        @-webkit-keyframes zoomOut {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }
            to {
                opacity: 0;
            }
        }

        @keyframes zoomOut {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }
            to {
                opacity: 0;
            }
        }

        .animate__zoomOut {
            -webkit-animation-name: zoomOut;
            animation-name: zoomOut;
        }

        @-webkit-keyframes zoomOutDown {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            to {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomOutDown {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            to {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        .animate__zoomOutDown {
            -webkit-animation-name: zoomOutDown;
            animation-name: zoomOutDown;
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
        }

        @-webkit-keyframes zoomOutLeft {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
            }
            to {
                opacity: 0;
                -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
                transform: scale(0.1) translate3d(-2000px, 0, 0);
            }
        }

        @keyframes zoomOutLeft {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
            }
            to {
                opacity: 0;
                -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
                transform: scale(0.1) translate3d(-2000px, 0, 0);
            }
        }

        .animate__zoomOutLeft {
            -webkit-animation-name: zoomOutLeft;
            animation-name: zoomOutLeft;
            -webkit-transform-origin: left center;
            transform-origin: left center;
        }

        @-webkit-keyframes zoomOutRight {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
            }
            to {
                opacity: 0;
                -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
                transform: scale(0.1) translate3d(2000px, 0, 0);
            }
        }

        @keyframes zoomOutRight {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
            }
            to {
                opacity: 0;
                -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
                transform: scale(0.1) translate3d(2000px, 0, 0);
            }
        }

        .animate__zoomOutRight {
            -webkit-animation-name: zoomOutRight;
            animation-name: zoomOutRight;
            -webkit-transform-origin: right center;
            transform-origin: right center;
        }

        @-webkit-keyframes zoomOutUp {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            to {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomOutUp {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }
            to {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        .animate__zoomOutUp {
            -webkit-animation-name: zoomOutUp;
            animation-name: zoomOutUp;
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
        }

        @-webkit-keyframes slideInDown {
            0% {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
                visibility: visible;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes slideInDown {
            0% {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
                visibility: visible;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__slideInDown {
            -webkit-animation-name: slideInDown;
            animation-name: slideInDown;
        }

        @-webkit-keyframes slideInLeft {
            0% {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes slideInLeft {
            0% {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__slideInLeft {
            -webkit-animation-name: slideInLeft;
            animation-name: slideInLeft;
        }

        @-webkit-keyframes slideInRight {
            0% {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes slideInRight {
            0% {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__slideInRight {
            -webkit-animation-name: slideInRight;
            animation-name: slideInRight;
        }

        @-webkit-keyframes slideInUp {
            0% {
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
                visibility: visible;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        @keyframes slideInUp {
            0% {
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
                visibility: visible;
            }
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }

        .animate__slideInUp {
            -webkit-animation-name: slideInUp;
            animation-name: slideInUp;
        }

        @-webkit-keyframes slideOutDown {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                visibility: hidden;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
        }

        @keyframes slideOutDown {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                visibility: hidden;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
        }

        .animate__slideOutDown {
            -webkit-animation-name: slideOutDown;
            animation-name: slideOutDown;
        }

        @-webkit-keyframes slideOutLeft {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                visibility: hidden;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        @keyframes slideOutLeft {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                visibility: hidden;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        .animate__slideOutLeft {
            -webkit-animation-name: slideOutLeft;
            animation-name: slideOutLeft;
        }

        @-webkit-keyframes slideOutRight {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                visibility: hidden;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
        }

        @keyframes slideOutRight {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                visibility: hidden;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
        }

        .animate__slideOutRight {
            -webkit-animation-name: slideOutRight;
            animation-name: slideOutRight;
        }

        @-webkit-keyframes slideOutUp {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                visibility: hidden;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
        }

        @keyframes slideOutUp {
            0% {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            to {
                visibility: hidden;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
        }

        .animate__slideOutUp {
            -webkit-animation-name: slideOutUp;
            animation-name: slideOutUp;
        }
    </style>
    <link data-savepage-href="../../logo.png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALdSURBVHgB7ZrRddowFIb/qxCe2aDuBGUEskGYIHQDUwinbyFvbSjUG4RMUDoBZAO6gbuBX5sEq1eyoW0KtiiOkV1/53DASMa+yLq/7r0iGCJd14GoX4DQjL6QX2kymiJjpNtv4YSuIKnFhwFAM4Q/rsnzfJPzyaSTdC+bEDTnj41np3s0+dhFRsje4BwSX7Y0+QgfzkyMEjBBkLpIY8stuPLdZQdZIfF5R4sDOnVhQKpBstc71z+4+yYukAH6UUu6DpHRddJHSIpGYjuRg3xomHQye+QKRA2WQN6nBXvS1zgQawxSmLrmJDYGbXQG0tFfhPJO/WvYA/Z4t8ife4SPi/WfoQ2S3YESTA964sXSJLjj3lAH+dPhgfBZK9vkjZZCjwxhCkMvYilOrJU8DoaCVQAcpWVsEL1CWRDkCF5kfkdZIAqUQTOUA5/GNzMRu+ZrFJuAZaatPmi3TZObIbu9GXs7doF4o7uspI99IblAnkjieAnfOLTwWIfU51/Cqnw4vx3k8Wg8OsORsWbpw3qodDBRC02WRhat5WocFYt5SqfUCLt04UNlkO1UBtlOZZDtVAbZTmWQ7VQG2U7qajsuak1REP4wKIpJak3kzN4ZWlWAg4xjp6flOlpVRJlTlWw8Ob2Ny4DHwKiSuEEnFcmJDuqcgh4MOY2g8yLRHBL1+RGNyYIhG6XTByIuKTooPldqyoiCj8zv6PlfQh0Sq7JkTqE8nqDxeJZ7gvBlUJszguiRWz22uTx/h2KiNKirsr/qIEoFR8LUUS+tSbYTPmwytM+Tj38tfbIo3L40SfeYupaT/X4LYdIuDgp4uDPb73Mo6angkJyUYrDPL2sM+g/jIQqDxHb5D3WkrTwFKR3S2jXpBq1Wi8Qfo2zcPU/0ZeJ11EZAA1IN0i49lNvnCAtyprsaw9XbHS0+z2WjsqlxHCLd9w4/fsOoZCkDXtTer8UsS7Zv0SReBXzwTc7/CePJ8ZVR7zTcAAAAAElFTkSuQmCC"
          rel="icon"
          sizes="16x16" type="image/png">
    <link data-savepage-href="../../logo.png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALdSURBVHgB7ZrRddowFIb/qxCe2aDuBGUEskGYIHQDUwinbyFvbSjUG4RMUDoBZAO6gbuBX5sEq1eyoW0KtiiOkV1/53DASMa+yLq/7r0iGCJd14GoX4DQjL6QX2kymiJjpNtv4YSuIKnFhwFAM4Q/rsnzfJPzyaSTdC+bEDTnj41np3s0+dhFRsje4BwSX7Y0+QgfzkyMEjBBkLpIY8stuPLdZQdZIfF5R4sDOnVhQKpBstc71z+4+yYukAH6UUu6DpHRddJHSIpGYjuRg3xomHQye+QKRA2WQN6nBXvS1zgQawxSmLrmJDYGbXQG0tFfhPJO/WvYA/Z4t8ife4SPi/WfoQ2S3YESTA964sXSJLjj3lAH+dPhgfBZK9vkjZZCjwxhCkMvYilOrJU8DoaCVQAcpWVsEL1CWRDkCF5kfkdZIAqUQTOUA5/GNzMRu+ZrFJuAZaatPmi3TZObIbu9GXs7doF4o7uspI99IblAnkjieAnfOLTwWIfU51/Cqnw4vx3k8Wg8OsORsWbpw3qodDBRC02WRhat5WocFYt5SqfUCLt04UNlkO1UBtlOZZDtVAbZTmWQ7VQG2U7qajsuak1REP4wKIpJak3kzN4ZWlWAg4xjp6flOlpVRJlTlWw8Ob2Ny4DHwKiSuEEnFcmJDuqcgh4MOY2g8yLRHBL1+RGNyYIhG6XTByIuKTooPldqyoiCj8zv6PlfQh0Sq7JkTqE8nqDxeJZ7gvBlUJszguiRWz22uTx/h2KiNKirsr/qIEoFR8LUUS+tSbYTPmwytM+Tj38tfbIo3L40SfeYupaT/X4LYdIuDgp4uDPb73Mo6angkJyUYrDPL2sM+g/jIQqDxHb5D3WkrTwFKR3S2jXpBq1Wi8Qfo2zcPU/0ZeJ11EZAA1IN0i49lNvnCAtyprsaw9XbHS0+z2WjsqlxHCLd9w4/fsOoZCkDXtTer8UsS7Zv0SReBXzwTc7/CePJ8ZVR7zTcAAAAAElFTkSuQmCC"
          rel="icon"
          sizes="32x32" type="image/png">
    <script data-savepage-src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js" data-savepage-type=""
            type="text/plain"></script>

    <script async="" data-savepage-src="https://run.pstmn.io/button.js" data-savepage-type="" id="_pmPostmanRunObject"
            type="text/plain"></script>
    <style type="text/css">
        .docsify-copy-code-button,
        .docsify-copy-code-button span {
            cursor: pointer;
            transition: all .25s ease
        }

        .docsify-copy-code-button {
            position: absolute;
            z-index: 1;
            top: 0;
            right: 0;
            overflow: visible;
            padding: .65em .8em;
            border: 0;
            border-radius: 0;
            outline: 0;
            font-size: 1em;
            background: grey;
            background: var(--theme-color, grey);
            color: #fff;
            opacity: 0
        }

        .docsify-copy-code-button span {
            border-radius: 3px;
            background: inherit;
            pointer-events: none
        }

        .docsify-copy-code-button .error,
        .docsify-copy-code-button .success {
            position: absolute;
            z-index: -100;
            top: 50%;
            right: 0;
            padding: .5em .65em;
            font-size: .825em;
            opacity: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .docsify-copy-code-button.error .error,
        .docsify-copy-code-button.success .success {
            right: 100%;
            opacity: 1;
            -webkit-transform: translate(-115%, -50%);
            transform: translate(-115%, -50%)
        }

        .docsify-copy-code-button:focus,
        pre:hover .docsify-copy-code-button {
            opacity: 1
        }
    </style>
    <style id="savepage-cssvariables">
        :root {
            --savepage-url-14: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODAiIGhlaWdodD0iMiIgdmlld0JveD0iMCAwIDgwIDIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzNy4zODYyIiBoZWlnaHQ9IjIiIGZpbGw9IiNCQ0VBRTMiLz4KPHJlY3QgeD0iMTAuNDA2NyIgd2lkdGg9IjM5Ljc2NzgiIGhlaWdodD0iMiIgZmlsbD0iI0ZCREE1NyIvPgo8cmVjdCB4PSI0NC40OTMyIiB3aWR0aD0iMjIuNzI0NCIgaGVpZ2h0PSIyIiBmaWxsPSIjRkY3Mjc2Ii8+CjxyZWN0IHg9IjU3LjI3NTkiIHdpZHRoPSIyMi43MjQ0IiBoZWlnaHQ9IjIiIGZpbGw9IiM3OTI0MkYiLz4KPC9zdmc+Cg==);
            --savepage-url-24: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNCIgaGVpZ2h0PSI0IiB2aWV3Qm94PSIwIDAgNCA0IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8Y2lyY2xlIGN4PSIyIiBjeT0iMiIgcj0iMiIgZmlsbD0iIzJCMjkyRCIgZmlsbC1vcGFjaXR5PSIwLjgiLz4KPC9zdmc+Cg==);
        }
    </style>
    <script id="savepage-shadowloader" type="text/javascript">
        "use strict";
        window.addEventListener("DOMContentLoaded",
            function (event) {
                savepage_ShadowLoader(5);
            }, false);

        function savepage_ShadowLoader(c) {
            createShadowDOMs(0, document.documentElement);

            function createShadowDOMs(a, b) {
                var i;
                if (b.localName == "iframe" || b.localName == "frame") {
                    if (a < c) {
                        try {
                            if (b.contentDocument.documentElement != null) {
                                createShadowDOMs(a + 1, b.contentDocument.documentElement)
                            }
                        } catch (e) {
                        }
                    }
                } else {
                    if (b.children.length >= 1 && b.children[0].localName == "template" && b.children[0].hasAttribute("data-savepage-shadowroot")) {
                        b.attachShadow({
                            mode: "open"
                        }).appendChild(b.children[0].content);
                        b.removeChild(b.children[0]);
                        for (i = 0; i < b.shadowRoot.children.length; i++)
                            if (b.shadowRoot.children[i] != null) createShadowDOMs(a, b.shadowRoot.children[i])
                    }
                    for (i = 0; i < b.children.length; i++)
                        if (b.children[i] != null) createShadowDOMs(a, b.children[i])
                }
            }
        }
    </script>
    <meta content="https://docs.woven.finance/payments/api/#/virtual_accounts" name="savepage-url">
    <meta content="Virtual Accounts" name="savepage-title">
    <meta content="Unknown" name="savepage-pubdate">
    <meta content="https://docs.woven.finance/payments/api/#/virtual_accounts" name="savepage-from">
    <meta content="Tue Jan 14 2025 21:34:22 GMT+0100 (West Africa Standard Time)" name="savepage-date">
    <meta content="Standard Items; Retain cross-origin frames; Merge CSS images; Remove unsaved URLs; Load lazy images in existing content; Max frame depth = 5; Max resource size = 50MB; Max resource time = 10s;"
          name="savepage-state">
    <meta content="33.9" name="savepage-version">
    <meta content="" name="savepage-comments">
</head>

<body class="api ready sticky" data-page="virtual_accounts.md">
<style id="postman-critical-css" type="text/css">
    .postman-run-button {
        background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjMyIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxMjgiIGhlaWdodD0iMzIiIHJ4PSI0IiBmaWxsPSIjRkY2QzM3Ii8+PHBhdGggZD0iTTEyIDEwLjg4M2EuNS41IDAgMCAxIC43NTctLjQyOWw4LjUyOCA1LjExN2EuNS41IDAgMCAxIDAgLjg1OGwtOC41MjggNS4xMTdhLjUuNSAwIDAgMS0uNzU3LS40M1YxMC44ODRaTTI3Ljg4OSAyMC41MDloMS41OHYtMy4xOTdoMS42MTFsMS43MTMgMy4xOTdoMS43NjRsLTEuODg3LTMuNDZjMS4wMjctLjQxNCAxLjU2OC0xLjI5MiAxLjU2OC0yLjQ3NyAwLTEuNjY2LTEuMDc0LTIuNzktMy4wNzctMi43OWgtMy4yNzN2OC43MjdaTTI5LjQ2OCAxNnYtMi44OThoMS40NWMxLjE4IDAgMS43MDguNTQxIDEuNzA4IDEuNDcgMCAuOTMtLjUyOCAxLjQyOC0xLjcgMS40MjhIMjkuNDdaTTM5Ljc5NyAxNy43NTZjMCAuOTk3LS43MTIgMS40OTEtMS4zOTQgMS40OTEtLjc0MSAwLTEuMjM1LS41MjQtMS4yMzUtMS4zNTV2LTMuOTI5aC0xLjU0M3Y0LjE2OGMwIDEuNTcyLjg5NSAyLjQ2MyAyLjE4MiAyLjQ2My45OCAwIDEuNjctLjUxNiAxLjk2OS0xLjI0OWguMDY4djEuMTY0aDEuNDk1di02LjU0NmgtMS41NDJ2My43OTNaTTQ0LjQ2OCAxNi42NzNjMC0uOTQ2LjU3MS0xLjQ5MSAxLjM4NS0xLjQ5MS43OTcgMCAxLjI3NC41MjQgMS4yNzQgMS4zOTd2My45M2gxLjU0M1YxNi4zNGMuMDA0LTEuNTY4LS44OS0yLjQ2My0yLjI0MS0yLjQ2My0uOTggMC0xLjY1NC40NjktMS45NTIgMS4xOTdINDQuNHYtMS4xMTJoLTEuNDc0djYuNTQ2aDEuNTQydi0zLjgzNlpNNTMuMjE1IDIwLjUwOWgxLjU0MnYtNi41NDZoLTEuNTQydjYuNTQ2Wm0uNzc1LTcuNDc1Yy40OSAwIC44OTEtLjM3NS44OTEtLjgzNSAwLS40NjUtLjQtLjg0LS44OS0uODQtLjQ5NSAwLS44OTUuMzc1LS44OTUuODQgMCAuNDYuNC44MzUuODk0LjgzNVpNNTcuODg2IDE2LjY3M2MwLS45NDYuNTcxLTEuNDkxIDEuMzg1LTEuNDkxLjc5NyAwIDEuMjc0LjUyNCAxLjI3NCAxLjM5N3YzLjkzaDEuNTQzVjE2LjM0Yy4wMDQtMS41NjgtLjg5LTIuNDYzLTIuMjQxLTIuNDYzLS45OCAwLTEuNjU0LjQ2OS0xLjk1MiAxLjE5N2gtLjA3N3YtMS4xMTJoLTEuNDc0djYuNTQ2aDEuNTQydi0zLjgzNlpNNjYuNzAxIDIwLjUwOWgxLjU4MXYtMi45NWgxLjY3YzIuMDE2IDAgMy4wOTgtMS4yMSAzLjA5OC0yLjg4OSAwLTEuNjY2LTEuMDctMi44ODktMy4wNzYtMi44ODlINjYuN3Y4LjcyOFptMS41ODEtNC4yNXYtMy4xNTdoMS40NDljMS4xODQgMCAxLjcwOS42NCAxLjcwOSAxLjU2OSAwIC45MjgtLjUyNSAxLjU4OS0xLjcgMS41ODloLTEuNDU4Wk03Ny4xMTcgMjAuNjM2YzEuOTE3IDAgMy4xMzYtMS4zNSAzLjEzNi0zLjM3NSAwLTIuMDI4LTEuMjE5LTMuMzgzLTMuMTM2LTMuMzgzLTEuOTE4IDAtMy4xMzYgMS4zNTUtMy4xMzYgMy4zODMgMCAyLjAyNCAxLjIxOCAzLjM3NSAzLjEzNiAzLjM3NVptLjAwOC0xLjIzNWMtMS4wNiAwLTEuNTgtLjk0Ny0xLjU4LTIuMTQ0cy41Mi0yLjE1NiAxLjU4LTIuMTU2YzEuMDQ0IDAgMS41NjQuOTU5IDEuNTY0IDIuMTU2cy0uNTIgMi4xNDQtMS41NjQgMi4xNDRaTTg2LjczNiAxNS42OTNjLS4yMTMtMS4xMDgtMS4xLTEuODE1LTIuNjM0LTEuODE1LTEuNTc2IDAtMi42NS43NzUtMi42NDYgMS45ODYtLjAwNC45NTQuNTg0IDEuNTg1IDEuODQgMS44NDVsMS4xMTcuMjM0Yy42MDEuMTMyLjg4My4zNzUuODgzLjc0NiAwIC40NDctLjQ4Ni43ODQtMS4yMi43ODQtLjcwNyAwLTEuMTY3LS4zMDctMS4yOTktLjg5NWwtMS41MDQuMTQ1Yy4xOTIgMS4yMDIgMS4yMDEgMS45MTMgMi44MDggMS45MTMgMS42MzYgMCAyLjc5MS0uODQ4IDIuNzk1LTIuMDg4LS4wMDQtLjkzMy0uNjA1LTEuNTA0LTEuODQtMS43NzJsLTEuMTE3LS4yNGMtLjY2NS0uMTQ4LS45MjktLjM3OC0uOTI1LS43NTgtLjAwNC0uNDQzLjQ4Ni0uNzUgMS4xMy0uNzUuNzExIDAgMS4wODYuMzg4IDEuMjA2LjgxOWwxLjQwNi0uMTU0Wk05MS40MTcgMTMuOTYzaC0xLjI5MXYtMS41NjhoLTEuNTQzdjEuNTY4aC0uOTI5djEuMTkzaC45M3YzLjY0Yy0uMDEgMS4yMzEuODg1IDEuODM2IDIuMDQ0IDEuODAyYTMuMSAzLjEgMCAwIDAgLjkwOC0uMTUzbC0uMjYtMS4yMDZjLS4wODUuMDItLjI2LjA2LS40NTEuMDYtLjM4OCAwLS43LS4xMzctLjctLjc2di0zLjM4M2gxLjI5MnYtMS4xOTNaTTkyLjcwNyAyMC41MDloMS41NDN2LTMuOThjMC0uODA2LjUzNy0xLjM1MSAxLjIwMS0xLjM1MS42NTIgMCAxLjEuNDM4IDEuMSAxLjExMnY0LjIxOWgxLjUxM3YtNC4wODNjMC0uNzM3LjQzOS0xLjI0OCAxLjE4NC0xLjI0OC42MjIgMCAxLjExNy4zNjYgMS4xMTcgMS4xNzZ2NC4xNTVoMS41NDd2LTQuMzk0YzAtMS40NjItLjg0NC0yLjIzNy0yLjA0Ni0yLjIzNy0uOTUgMC0xLjY3NS40NjktMS45NjQgMS4xOTdoLS4wNjljLS4yNTEtLjc0MS0uODg2LTEuMTk3LTEuNzY4LTEuMTk3LS44NzggMC0xLjUzNC40NTEtMS44MDcgMS4xOTdoLS4wNzZ2LTEuMTEyaC0xLjQ3NXY2LjU0NlpNMTA1LjM2IDIwLjY0YzEuMDI3IDAgMS42NDEtLjQ4IDEuOTIyLTEuMDNoLjA1MXYuODk5aDEuNDgzdi00LjM4MWMwLTEuNzMtMS40MS0yLjI1LTIuNjU5LTIuMjUtMS4zNzYgMC0yLjQzMy42MTQtMi43NzQgMS44MDdsMS40NC4yMDRjLjE1NC0uNDQ3LjU4OC0uODMgMS4zNDItLjgzLjcxNiAwIDEuMTA4LjM2NiAxLjEwOCAxLjAxdi4wMjVjMCAuNDQzLS40NjQuNDY0LTEuNjE5LjU4OC0xLjI3LjEzNi0yLjQ4NC41MTUtMi40ODQgMS45OSAwIDEuMjg3Ljk0MiAxLjk2OSAyLjE5IDEuOTY5Wm0uNDAxLTEuMTMzYy0uNjQ0IDAtMS4xMDQtLjI5NC0xLjEwNC0uODYgMC0uNTkzLjUxNi0uODQgMS4yMDYtLjkzOC40MDUtLjA1NiAxLjIxNC0uMTU4IDEuNDE1LS4zMnYuNzcxYzAgLjczLS41ODggMS4zNDctMS41MTcgMS4zNDdaTTExMS45MSAxNi42NzNjMC0uOTQ2LjU3MS0xLjQ5MSAxLjM4NS0xLjQ5MS43OTcgMCAxLjI3NC41MjQgMS4yNzQgMS4zOTd2My45M2gxLjU0M1YxNi4zNGMuMDA0LTEuNTY4LS44OTEtMi40NjMtMi4yNDItMi40NjMtLjk4IDAtMS42NTMuNDY5LTEuOTUyIDEuMTk3aC0uMDc2di0xLjExMmgtMS40NzV2Ni41NDZoMS41NDN2LTMuODM2WiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==');
        display: inline-block;
        border-radius: 4px;
        cursor: pointer;
        height: 32px;
        border: none;
        width: 123px
    }

    .postman-run-button:hover {
        background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjMyIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxyZWN0IHdpZHRoPSIxMjgiIGhlaWdodD0iMzIiIHJ4PSI0IiBmaWxsPSIjRTA1MzIwIi8+PHBhdGggZD0iTTEyIDEwLjg4M2EuNS41IDAgMCAxIC43NTctLjQyOWw4LjUyOCA1LjExN2EuNS41IDAgMCAxIDAgLjg1OGwtOC41MjggNS4xMTdhLjUuNSAwIDAgMS0uNzU3LS40M1YxMC44ODRaTTI3Ljg4OSAyMC41MDloMS41OHYtMy4xOTdoMS42MTFsMS43MTMgMy4xOTdoMS43NjRsLTEuODg3LTMuNDZjMS4wMjctLjQxNCAxLjU2OC0xLjI5MiAxLjU2OC0yLjQ3NyAwLTEuNjY2LTEuMDc0LTIuNzktMy4wNzctMi43OWgtMy4yNzN2OC43MjdaTTI5LjQ2OCAxNnYtMi44OThoMS40NWMxLjE4IDAgMS43MDguNTQxIDEuNzA4IDEuNDcgMCAuOTMtLjUyOCAxLjQyOC0xLjcgMS40MjhIMjkuNDdaTTM5Ljc5NyAxNy43NTZjMCAuOTk3LS43MTIgMS40OTEtMS4zOTQgMS40OTEtLjc0MSAwLTEuMjM1LS41MjQtMS4yMzUtMS4zNTV2LTMuOTI5aC0xLjU0M3Y0LjE2OGMwIDEuNTcyLjg5NSAyLjQ2MyAyLjE4MiAyLjQ2My45OCAwIDEuNjctLjUxNiAxLjk2OS0xLjI0OWguMDY4djEuMTY0aDEuNDk1di02LjU0NmgtMS41NDJ2My43OTNaTTQ0LjQ2OCAxNi42NzNjMC0uOTQ2LjU3MS0xLjQ5MSAxLjM4NS0xLjQ5MS43OTcgMCAxLjI3NC41MjQgMS4yNzQgMS4zOTd2My45M2gxLjU0M1YxNi4zNGMuMDA0LTEuNTY4LS44OS0yLjQ2My0yLjI0MS0yLjQ2My0uOTggMC0xLjY1NC40NjktMS45NTIgMS4xOTdINDQuNHYtMS4xMTJoLTEuNDc0djYuNTQ2aDEuNTQydi0zLjgzNlpNNTMuMjE1IDIwLjUwOWgxLjU0MnYtNi41NDZoLTEuNTQydjYuNTQ2Wm0uNzc1LTcuNDc1Yy40OSAwIC44OTEtLjM3NS44OTEtLjgzNSAwLS40NjUtLjQtLjg0LS44OS0uODQtLjQ5NSAwLS44OTUuMzc1LS44OTUuODQgMCAuNDYuNC44MzUuODk0LjgzNVpNNTcuODg2IDE2LjY3M2MwLS45NDYuNTcxLTEuNDkxIDEuMzg1LTEuNDkxLjc5NyAwIDEuMjc0LjUyNCAxLjI3NCAxLjM5N3YzLjkzaDEuNTQzVjE2LjM0Yy4wMDQtMS41NjgtLjg5LTIuNDYzLTIuMjQxLTIuNDYzLS45OCAwLTEuNjU0LjQ2OS0xLjk1MiAxLjE5N2gtLjA3N3YtMS4xMTJoLTEuNDc0djYuNTQ2aDEuNTQydi0zLjgzNlpNNjYuNzAxIDIwLjUwOWgxLjU4MXYtMi45NWgxLjY3YzIuMDE2IDAgMy4wOTgtMS4yMSAzLjA5OC0yLjg4OSAwLTEuNjY2LTEuMDctMi44ODktMy4wNzYtMi44ODlINjYuN3Y4LjcyOFptMS41ODEtNC4yNXYtMy4xNTdoMS40NDljMS4xODQgMCAxLjcwOS42NCAxLjcwOSAxLjU2OSAwIC45MjgtLjUyNSAxLjU4OS0xLjcgMS41ODloLTEuNDU4Wk03Ny4xMTcgMjAuNjM2YzEuOTE3IDAgMy4xMzYtMS4zNSAzLjEzNi0zLjM3NSAwLTIuMDI4LTEuMjE5LTMuMzgzLTMuMTM2LTMuMzgzLTEuOTE4IDAtMy4xMzYgMS4zNTUtMy4xMzYgMy4zODMgMCAyLjAyNCAxLjIxOCAzLjM3NSAzLjEzNiAzLjM3NVptLjAwOC0xLjIzNWMtMS4wNiAwLTEuNTgtLjk0Ny0xLjU4LTIuMTQ0cy41Mi0yLjE1NiAxLjU4LTIuMTU2YzEuMDQ0IDAgMS41NjQuOTU5IDEuNTY0IDIuMTU2cy0uNTIgMi4xNDQtMS41NjQgMi4xNDRaTTg2LjczNiAxNS42OTNjLS4yMTMtMS4xMDgtMS4xLTEuODE1LTIuNjM0LTEuODE1LTEuNTc2IDAtMi42NS43NzUtMi42NDYgMS45ODYtLjAwNC45NTQuNTg0IDEuNTg1IDEuODQgMS44NDVsMS4xMTcuMjM0Yy42MDEuMTMyLjg4My4zNzUuODgzLjc0NiAwIC40NDctLjQ4Ni43ODQtMS4yMi43ODQtLjcwNyAwLTEuMTY3LS4zMDctMS4yOTktLjg5NWwtMS41MDQuMTQ1Yy4xOTIgMS4yMDIgMS4yMDEgMS45MTMgMi44MDggMS45MTMgMS42MzYgMCAyLjc5MS0uODQ4IDIuNzk1LTIuMDg4LS4wMDQtLjkzMy0uNjA1LTEuNTA0LTEuODQtMS43NzJsLTEuMTE3LS4yNGMtLjY2NS0uMTQ4LS45MjktLjM3OC0uOTI1LS43NTgtLjAwNC0uNDQzLjQ4Ni0uNzUgMS4xMy0uNzUuNzExIDAgMS4wODYuMzg4IDEuMjA2LjgxOWwxLjQwNi0uMTU0Wk05MS40MTcgMTMuOTYzaC0xLjI5MXYtMS41NjhoLTEuNTQzdjEuNTY4aC0uOTI5djEuMTkzaC45M3YzLjY0Yy0uMDEgMS4yMzEuODg1IDEuODM2IDIuMDQ0IDEuODAyYTMuMSAzLjEgMCAwIDAgLjkwOC0uMTUzbC0uMjYtMS4yMDZjLS4wODUuMDItLjI2LjA2LS40NTEuMDYtLjM4OCAwLS43LS4xMzctLjctLjc2di0zLjM4M2gxLjI5MnYtMS4xOTNaTTkyLjcwNyAyMC41MDloMS41NDN2LTMuOThjMC0uODA2LjUzNy0xLjM1MSAxLjIwMS0xLjM1MS42NTIgMCAxLjEuNDM4IDEuMSAxLjExMnY0LjIxOWgxLjUxM3YtNC4wODNjMC0uNzM3LjQzOS0xLjI0OCAxLjE4NC0xLjI0OC42MjIgMCAxLjExNy4zNjYgMS4xMTcgMS4xNzZ2NC4xNTVoMS41NDd2LTQuMzk0YzAtMS40NjItLjg0NC0yLjIzNy0yLjA0Ni0yLjIzNy0uOTUgMC0xLjY3NS40NjktMS45NjQgMS4xOTdoLS4wNjljLS4yNTEtLjc0MS0uODg2LTEuMTk3LTEuNzY4LTEuMTk3LS44NzggMC0xLjUzNC40NTEtMS44MDcgMS4xOTdoLS4wNzZ2LTEuMTEyaC0xLjQ3NXY2LjU0NlpNMTA1LjM2IDIwLjY0YzEuMDI3IDAgMS42NDEtLjQ4IDEuOTIyLTEuMDNoLjA1MXYuODk5aDEuNDgzdi00LjM4MWMwLTEuNzMtMS40MS0yLjI1LTIuNjU5LTIuMjUtMS4zNzYgMC0yLjQzMy42MTQtMi43NzQgMS44MDdsMS40NC4yMDRjLjE1NC0uNDQ3LjU4OC0uODMgMS4zNDItLjgzLjcxNiAwIDEuMTA4LjM2NiAxLjEwOCAxLjAxdi4wMjVjMCAuNDQzLS40NjQuNDY0LTEuNjE5LjU4OC0xLjI3LjEzNi0yLjQ4NC41MTUtMi40ODQgMS45OSAwIDEuMjg3Ljk0MiAxLjk2OSAyLjE5IDEuOTY5Wm0uNDAxLTEuMTMzYy0uNjQ0IDAtMS4xMDQtLjI5NC0xLjEwNC0uODYgMC0uNTkzLjUxNi0uODQgMS4yMDYtLjkzOC40MDUtLjA1NiAxLjIxNC0uMTU4IDEuNDE1LS4zMnYuNzcxYzAgLjczLS41ODggMS4zNDctMS41MTcgMS4zNDdaTTExMS45MSAxNi42NzNjMC0uOTQ2LjU3MS0xLjQ5MSAxLjM4NS0xLjQ5MS43OTcgMCAxLjI3NC41MjQgMS4yNzQgMS4zOTd2My45M2gxLjU0M1YxNi4zNGMuMDA0LTEuNTY4LS44OTEtMi40NjMtMi4yNDItMi40NjMtLjk4IDAtMS42NTMuNDY5LTEuOTUyIDEuMTk3aC0uMDc2di0xLjExMmgtMS40NzV2Ni41NDZoMS41NDN2LTMuODM2WiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==')
    }
</style>
<style>
    :root {
        --docsify-example-panels-left-panel-width: 60%;
        --docsify-example-panels-right-panel-width: 40%;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light nav-fixed app-nav no-badge" id="topnav">
    <div class="container-fluid">
        <div class="row w-100">

            <div class="col-12 mt-3">
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mr-lg-auto">

                        <li class="nav-item">
                            <a class="nav-link active" data-savepage-href="/payments"
                               href="https://docs.woven.finance/payments">
                                Payments
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<main>
    <button aria-label="Menu" class="sidebar-toggle">
        <div class="sidebar-toggle-button"><span></span><span></span><span></span></div>
    </button>
    <aside class="sidebar">

    </aside>
    <section class="content">
        <article class="markdown-section" id="main">


            <div id="main-container">

                <h1 id="virtual-accounts"><a class="anchor"
                                             data-id="virtual-accounts"
                                             data-savepage-href="#/virtual_accounts?id=virtual-accounts"
                                             href="#"><span>Sprint Pay Collections</span></a></h1>
                <p>Make Payment easily on sprint pay via bank transfers, card, USSD and other means of payment. </p><span class="header-subtitle text-primary-dark"></span>

                <div class="docsify-example-panels">


                    <div class="docsify-example-panel title-panel">

                        <br>

                        <h2 id="create-vnuban-amp-customer">
                            <a
                                class="anchor"
                                data-id="create-vnuban-amp-customer"
                                data-savepage-href="#/virtual_accounts?id=create-vnuban-amp-customer"
                                href="#">

                                <span>Create a transaction</span></a></h2>
                        <p class="mt-4">This endpoint initiate a transaction for customer to make payment</code>

                        </p>

                        <blockquote>
                            <p><span class="list-header">Initiate a transaction</span></p>
                            <p><span class="list-header">GET</span></p>

                            <ul class="m-0 pl-3 inline ml-n3">

                                <li><span class="mx-3">https://web.sprintpay.online/pay?amount={amount}&key={apikey}&ref={refrence}&email={email}</span></li>

                            </ul>
                            <br>
                        </blockquote>
                        <hr>

                    </div>
                    <div class="docsify-example-panel left-panel">

                            <span class="header-subtitle-2 text-primary-dark">
                                <h3 id="headers"><a class="anchor"
                                                    data-id="headers" data-savepage-href="#/virtual_accounts?id=headers"
                                                    href="#"><span>Parameters</span></a></h3>
                            </span>
                        <div class="flat-table mt-3">
                            <div class="card">
                                <div class="card-body">

                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Parameter</th>
                                            <th>Type</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>amount</td>
                                            <td>Integer</td>
                                        </tr>
                                        <tr>
                                            <td>key</td>
                                            <td>Your Api Key</td>
                                        </tr>
                                        <tr>
                                            <td>ref</td>
                                            <td>Your Unique Refrence</td>
                                        </tr>
                                        <tr>
                                            <td>email</td>
                                            <td>Customer Email</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>





                    <div class="docsify-example-panel title-panel">

                        <br>

                        <h2 id="create-vnuban-amp-customer">
                            <a
                                class="anchor"
                                data-id="create-vnuban-amp-customer"
                                data-savepage-href="#/virtual_accounts?id=create-vnuban-amp-customer"
                                href="#">

                                <span>Verify Transaction</span></a></h2>
                        <p class="mt-4">This endpoint verify your transactions</code>

                        </p>

                        <blockquote>
                            <p><span class="list-header">Verify a transaction</span></p>
                            <p><span class="list-header">GET</span></p>

                            <ul class="m-0 pl-3 inline ml-n3">

                                <li><span class="mx-3">http://web.sprintpay.online/api/verify-transaction?trans_id=VEGJFZKWQXTQ</span></li>

                            </ul>
                            <br>
                        </blockquote>
                        <hr>


                        <div class="docsify-tabs docsify-tabs--material">
                            <button class="docsify-tabs__tab docsify-tabs__tab--active" data-tab="sample response">
                                Expected Response
                            </button>
                            <div class="docsify-tabs__content" data-tab-content="sample response">

                                    <pre data-lang="json" v-pre=""><code class="lang-json"><span
                                                class="token punctuation">{</span>

    "status": true,
    "message": "success",
    "amount": "3500.00"

<span class="token punctuation">}</span></code><button class="docsify-copy-code-button"><span class="label">Copy to clipboard</span><span
                                                class="error">Error</span><span class="success">Copied</span></button></pre>
                            </div>
                        </div>


                    </div>


                    <h2><a><span>Set Webhook</span></a></h2>
                    <p class="mt-4">After successful payment, Webhook will be sent to your registred webhook url. Register your webhook url this way</code>


                    </p>
                    <blockquote>
                        <p><span class="list-header">Register Payment confirmation webhook</span></p>
                        <p><span class="list-header">GET</span></p>

                        <ul class="m-0 pl-3 inline ml-n3">
                            <li><span class="mx-3">https://web.sprintpay.online/register-url?url={webhookurl}&check_url={usercheckurl}&sitename={sitename}&server_ip={yourserverip}</span></li>


                        </ul>
                        <br>
                    </blockquote>



                    <span class="header-subtitle-2 text-primary-dark">
                                <h3 id="headers"><a class="anchor"
                                                    data-id="headers" data-savepage-href="#/virtual_accounts?id=headers"
                                                    href="#"><span>Parameters</span></a></h3>
                            </span>
                    <div class="flat-table mt-3">
                        <div class="card">
                            <div class="card-body">

                                <table>
                                    <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Type</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>url</td>
                                        <td>Your Fund wallet Url</td>
                                    </tr>
                                    <tr>
                                        <td>check_url</td>
                                        <td>Your User Verification URL</td>
                                    </tr>
                                    <tr>
                                        <td>sitename</td>
                                        <td>Your Site Name</td>
                                    </tr>
                                    <tr>
                                        <td>server_ip</td>
                                        <td>Your Server Ip</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    <div class="docsify-example-panel right-panel">

                        <div class="docsify-tabs docsify-tabs--material">
                            <button class="docsify-tabs__tab docsify-tabs__tab--active"
                                    data-tab="post /vnubans/create_customer">POST /webhook Sample
                            </button>
                            <div class="docsify-tabs__content" data-tab-content="post /vnubans/create_customer">

                                    <pre data-lang="bash" v-pre=""><code class="lang-bash"><span class="token function">curl</span> <span
                                                class="token parameter variable">--location</span> <span
                                                class="token parameter variable">--request</span> POST <span
                                                class="token string"></span> <span
                                                class="token punctuation">\</span>
--data-raw <span class="token string">'{
"amount" : "1000",
"email" : "test@test.com",
"order_id" : "REFFJDtGpDjvZv20240602034027"
}
                                        </span></code><button class="docsify-copy-code-button"><span class="label">Copy to clipboard</span><span class="error">Error</span><span
                                                class="success">Copied</span></button></pre>
                            </div>
                        </div>

                        <div class="docsify-tabs docsify-tabs--material">
                            <button class="docsify-tabs__tab docsify-tabs__tab--active" data-tab="sample response">
                                Expected Response
                            </button>
                            <div class="docsify-tabs__content" data-tab-content="sample response">

                                    <pre data-lang="json" v-pre=""><code class="lang-json"><span
                                                class="token punctuation">{</span>
"status": true,
"message": "NGN 100.00 has been successfully added to your wallet"
<span class="token punctuation">}</span></code><button class="docsify-copy-code-button"><span class="label">Copy to clipboard</span><span
                                                class="error">Error</span><span class="success">Copied</span></button></pre>
                            </div>
                        </div>

                    </div>


                </div>




            </div>
















        </article>
    </section>
</main>
<script data-savepage-type="" type="text/plain"></script>
<script data-savepage-src="../../assets/js/doc.js" data-savepage-type="" type="text/plain"></script>
<script data-savepage-src="https://cdn.jsdelivr.net/npm/docsify-tabs@1" data-savepage-type=""
        type="text/plain"></script>
<script data-savepage-src="../assets/js/alerts.js" data-savepage-type="" type="text/plain"></script>
<script data-savepage-src="https://unpkg.com/docsify-copy-code@2" data-savepage-type="" type="text/plain"></script>

<script data-savepage-src="https://cdn.jsdelivr.net/npm/docsify-example-panels@1.0.3/dist/docsify-example-panels.min.js" data-savepage-type=""
        type="text/plain"></script>
<script data-savepage-src="https://cdn.jsdelivr.net/npm/prismjs@1/components/prism-bash.min.js" data-savepage-type=""
        type="text/plain"></script>
<script data-savepage-src="https://cdn.jsdelivr.net/npm/prismjs@1/components/prism-json.min.js" data-savepage-type=""
        type="text/plain"></script>
<template id="auto-clicker-autofill-popup"></template>
<template id="auto-clicker-autofill-popup-tr"></template>
<div class="progress" style="opacity: 0; width: 0%;"></div>
</body>

</html>
