#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
THEME_DIR="$ROOT_DIR/cruzeiro-azul"
DIST_DIR="$ROOT_DIR/dist"
ZIP_FILE="$DIST_DIR/cruzeiro-azul.zip"

if [ ! -d "$THEME_DIR" ]; then
  echo "Erro: diretório do tema não encontrado em $THEME_DIR" >&2
  exit 1
fi

mkdir -p "$DIST_DIR"
rm -f "$ZIP_FILE"

(
  cd "$ROOT_DIR"
  zip -r "$ZIP_FILE" "cruzeiro-azul" \
    -x "*.DS_Store" "*/.git/*" "*/node_modules/*" >/dev/null
)

echo "Pacote criado: $ZIP_FILE"
