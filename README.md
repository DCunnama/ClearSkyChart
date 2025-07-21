# ClearSkyChart

This repository contains a simple web widget that fetches weather data for **Sutherland, South Africa** using the [Open-Meteo](https://open-meteo.com/) API. Because the service only provides roughly three months of historical hourly data, the widget requests the most recent 92 days of history and seven days of forecast data. The page now shows a forecast for the next week (starting today), daily metrics for the previous week, and 7/14/28/90‑day averages. The widget is implemented in `widget/index.html` and can be embedded in any webpage.

## Usage

1. Open `widget/index.html` in a browser. The script requests the most recent 92 days of historical data along with a 7‑day forecast from the Open-Meteo API. It displays three tables: a forecast for the next week, daily averages for the past week (yesterday back seven days), and overall averages for 7, 14, 28 and 90 day periods.
2. To embed the widget in another page, copy the file or include it with an `<iframe>`:
   ```html
   <iframe src="/path/to/widget/index.html" style="border:0;width:660px;height:600px"></iframe>
   ```

The code does not require any build step and only relies on the browser's fetch API. Internet access is required at runtime to retrieve data from Open-Meteo.

## Troubleshooting

If the widget displays **"Failed to load data"**, ensure that your network
allows connections to `api.open-meteo.com`. Some environments block external
requests, which will prevent the data from loading.

## Example: Requesting Current Weather

When using `current_weather=true` with the Open‑Meteo API you must also request
at least one weather variable. Otherwise the service returns `400 Bad Request`.
The snippet below fetches current conditions for a location while requesting
hourly temperature data:

```javascript
const lat = 32.4;
const lon = 18.5;
const url =
  `https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}` +
  `&current_weather=true&hourly=temperature_2m`;

fetch(url)
  .then(res => {
    if (!res.ok) throw new Error('Request failed with status ' + res.status);
    return res.json();
  })
  .then(data => console.log(data))
  .catch(err => console.error(err));
```

