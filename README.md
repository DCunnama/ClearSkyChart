# ClearSkyChart

This repository contains a simple web widget that fetches weather data for **Sutherland, South Africa** using the [Open-Meteo](https://open-meteo.com/) API and summarizes conditions for the past 7, 14 and 28 days. The widget is implemented in `widget/index.html` and can be embedded in any webpage.

## Usage

1. Open `widget/index.html` in a browser. The script will request hourly data from the Open-Meteo API and display a table with the average temperature, humidity, cloud cover, wind, darkness fraction and a computed *clear sky index* for 7, 14 and 28 day periods.
2. To embed the widget in another page, copy the contents of `widget/index.html` or include it via an `<iframe>`.

The code does not require any build step and only relies on the browser's fetch API. Internet access is required at runtime to retrieve data from Open-Meteo.
