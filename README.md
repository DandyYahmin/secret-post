
# 👁‍🗨Secret-Post

a place where you can express your thoughts anonymously, no one knows whether this place is safe or dangerous



## 🔗 Links
https://secret-post.vercel.app
## ⚙ Tech Stack

**Framework:** Laravel

**Client:** TailwindCSS


## 📩 Installation

```bash
  git clone https://github.com/DandyYahmin/secret-post.git
```
    
## 👟 Run Locally

Go to the project directory

```bash
  cd secret-post
```

Install dependencies

```bash
  npm install
```

Migrate schema

```bash
  php artisan migrate
```

Start the server

```bash
  npm run dev
  php artisan serve
```


## 🔥 API Reference

#### Local

```http
  POST /api/post
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `thread` | `string` | **Required** |

#### from https://secret-post.vercel.app

```http
  POST /api/api/post
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `thread` | `string` | **Required** |

## 📜 MIT License

Copyright (c) [2024] [Dandy Darmawan Al Yahmin]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

