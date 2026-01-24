# AI 项目需求文档

## 项目目标
将 resource/sample 文件夹中的所有设计稿图片转换为 PHP、HTML、CSS、JS 代码，实现高保真网页复刻。

## 资源路径规范
- 游戏图标: `resource/game-icons/`
- 通用图标: `resource/icons/`
- 主背景: `resource/main/`
- UI 元素: `resource/ui-elements/`
- 设计稿: `resource/sample/`

## 开发规则

### 1. 图片使用优先级
- 所有图标、logo、游戏图片等必须优先使用 resource 文件夹中的 PNG 图片
- 优先级顺序:
  1. resource/game-icons/ (游戏图标)
  2. resource/icons/ (通用图标)
  3. resource/ui-elements/ (UI 元素)
  4. resource/main/ (主背景)
- 只有在 resource 中找不到合适图片时才使用其他方式

### 2. 代码规范
- 使用 PHP 作为主文件格式
- HTML5 语义化标签
- CSS3 现代特性
- 原生 JavaScript (ES6+)
- 响应式设计

### 3. 工作流程
- 每张图片作为一个独立的 step
- 完成一个 step 后才能进入下一张
- 严格按照图片顺序处理

## 图片处理顺序
1. 2.png
2. 3.png
3. home.png
4. Snipaste_2026-01-23_10-15-16.png
5. Snipaste_2026-01-23_10-15-27.png
... (按文件名顺序处理所有 sample 文件)

## 项目文件结构
```
htdocs/
├── index.php (主入口)
├── css/
│   └── style.css
├── js/
│   └── main.js
└── resource/
    ├── game-icons/
    ├── icons/
    ├── main/
    ├── ui-elements/
    └── sample/
```

## 当前状态
- [ ] Step 1: 处理 2.png
- [ ] Step 2: 处理 3.png
- [ ] Step 3: 处理 home.png
- [ ] Step 4: 处理 Snipaste_2026-01-23_10-15-16.png
... (所有 sample 文件)
