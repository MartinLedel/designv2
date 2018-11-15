---
views:
    byline:
        region: main
        template: anax/v2/block/default
        sort: 2
        data:
            meta:
                type: single
                route: block/byline

    redovisa:
        region: sidebar-right
        template: anax/v2/block/default
        data:
            meta:
                type: single
                route: block/om-redovisa

    kursrepo:
        region: sidebar-left
        template: anax/v2/block/default
        data:
            meta:
                type: single
                route: block/om-kursrepo
---
Lek lite med Markdown
==========================
Dags att leka lite!

**Test1**

***Test2***

*   Nestad lista
    -   Mjölk
    -   Mjöl
    -   Köttbullar

Quotes:
>Babyshark, doo doo doo doo doo doo
>
>Mommy shark, doo doo doo doo doo doo
>
>Daddy shark, doo doo doo doo doo doo
>
>Grandma shark, doo doo doo doo doo doo
>
>Grandpa shark, doo doo doo doo doo doo

Testa lite kod

```
<div>Hej</div>
```
