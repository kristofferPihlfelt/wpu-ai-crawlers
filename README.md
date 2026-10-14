# WPU AI Crawlers

Gratis plugin från [wordpressutveckling.se](https://wordpressutveckling.se/). Koden förklaras rad för rad i guiden: **[https://wordpressutveckling.se/syns-din-sajt-i-chatgpt-och-ai-sok/](https://wordpressutveckling.se/syns-din-sajt-i-chatgpt-och-ai-sok/)**

Byggt av [Kristoffer Pihlfelt](https://pihlfelt.se) på [Pihlfelt & Vänner](https://pihlfelt.se). Licens: GPL-2.0-or-later.

- **Bidragsgivare:** Pihlfelt & Vänner
- **Kräver WordPress:** 6.7
- **Kräver PHP:** 8.2
- **Version:** 1.0.0
- **Licens:** GPL-2.0-or-later

## Vad det gör

Lägger till ett block i den robots.txt som WordPress genererar, som uttryckligen tillåter AI-sökens crawlers och de botar som hämtar sidor när en användare frågar: OAI-SearchBot, ChatGPT-User, GPTBot, PerplexityBot, Perplexity-User, Claude-SearchBot, Claude-User, ClaudeBot och Google-Extended. Blocket hamnar efter reglerna från WordPress och eventuellt SEO-plugin.

Är sajten satt att inte synas för sökmotorer (Inställningar > Läsning) lägger pluginet inte till något.

Vill du tillåta AI-sök men inte träning flyttar du GPTBot och ClaudeBot till ett eget block med Disallow: / i koden.

## Installation

1. Gå till Tillägg > Lägg till nytt > Ladda upp tillägg och välj zip-filen. Aktivera.
2. Öppna /robots.txt på sajten och kontrollera att blocket syns. Gör det inte det finns en fysisk robots.txt i webbroten (då körs inte filtret) eller så serverar ett cacheplugin en gammal version.

## Källa

Koden förklaras i guiden "Syns din sajt i ChatGPT och AI-sök?":
https://wordpressutveckling.se/syns-din-sajt-i-chatgpt-och-ai-sok/

Den senaste versionen finns alltid på samma adress:
https://wordpressutveckling.se/ladda-ner/wpu-ai-crawlers/

## Ändringslogg

### 1.0.0
* Första versionen, samma kod som i guiden.
