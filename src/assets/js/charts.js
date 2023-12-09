// const data = [
//   {
//     date: new Date(2023, 0, 1).getTime(),
//     successfulChats: 20,
//     pendingMessages: 30,
//   },
//   {
//     date: new Date(2023, 1, 1).getTime(),
//     successfulChats: 25,
//     pendingMessages: 50,
//   },
//   {
//     date: new Date(2023, 2, 1).getTime(),
//     successfulChats: 60,
//     pendingMessages: 80,
//   },
//   {
//     date: new Date(2023, 3, 1).getTime(),
//     successfulChats: 20,
//     pendingMessages: 50,
//   },
//   {
//     date: new Date(2023, 4, 1).getTime(),
//     successfulChats: 25,
//     pendingMessages: 20,
//   },
//   {
//     date: new Date(2023, 5, 1).getTime(),
//     successfulChats: 15,
//     pendingMessages: 60,
//   },
//   {
//     date: new Date(2023, 6, 1).getTime(),
//     successfulChats: 60,
//     pendingMessages: 50,
//   },
//   {
//     date: new Date(2023, 7, 1).getTime(),
//     successfulChats: 30,
//     pendingMessages: 60,
//   },
//   {
//     date: new Date(2023, 8, 1).getTime(),
//     successfulChats: 90,
//     pendingMessages: 50,
//   },
//   {
//     date: new Date(2023, 9, 1).getTime(),
//     successfulChats: 30,
//     pendingMessages: 60,
//   },
//   {
//     date: new Date(2023, 10, 1).getTime(),
//     successfulChats: 25,
//     pendingMessages: 90,
//   },
//   {
//     date: new Date(2023, 11, 1).getTime(),
//     successfulChats: 25,
//     pendingMessages: 50,
//   },
// ];

const perfomanceOverviewData = [
  {
    date: 1672545600000,
    successfulChats: 2000,
    pendingMessages: 30000,
  },
  {
    date: 1675224000000,
    successfulChats: 25000,
    pendingMessages: 50000,
  },
  {
    date: 1677643200000,
    successfulChats: 60000,
    pendingMessages: 80000,
  },
  {
    date: 1680321600000,
    successfulChats: 20000,
    pendingMessages: 50000,
  },
  {
    date: 1682913600000,
    successfulChats: 25000,
    pendingMessages: 20000,
  },
  {
    date: 1685592000000,
    successfulChats: 15000,
    pendingMessages: 60000,
  },
  {
    date: 1688184000000,
    successfulChats: 60000,
    pendingMessages: 50000,
  },
  {
    date: 1690862400000,
    successfulChats: 30000,
    pendingMessages: 60000,
  },
  {
    date: 1693540800000,
    successfulChats: 90000,
    pendingMessages: 50000,
  },
  {
    date: 1696132800000,
    successfulChats: 30000,
    pendingMessages: 60000,
  },
  {
    date: 1698811200000,
    successfulChats: 25000,
    pendingMessages: 90000,
  },
  {
    date: 1701403200000,
    successfulChats: 25000,
    pendingMessages: 50000,
  },
];
const setUpProgressTotal = 80;

// function svgToBase64(svg) {
//   // First, you need to URL-encode the SVG string to escape special characters.
//   var urlEncodedSvg = encodeURIComponent(svg);

//   // Then, you can convert the URL-encoded SVG string to base64.
//   var base64Svg = btoa(urlEncodedSvg);

//   return "data:image/svg+xml;base64," + base64Svg;
// }

function formatNumberWithCommas(number) {
  return number.toLocaleString(undefined, {
    minimumFractionDigits: 2,
    maximumFractionDigits: 2,
  });
}

function formatNumber(num) {
  if (num >= 1e9) {
    return (num / 1e9).toFixed(2) + "b";
  }
  if (num >= 1e6) {
    return (num / 1e6).toFixed(2) + "m";
  }
  if (num >= 1e3) {
    return (num / 1e3).toFixed(2) + "k";
  }

  return num;
}

class ActiveDot {
  constructor(svg, colors, key) {
    this.svg = svg;
    this.colors = colors;
    this.filter_id = "filter0_d_" + key;
    this.fe_blend_in2 = "effect1_dropShadow_" + key;
    this.gradient_id = "paint0_linear_" + key;
    this.defs = svg.append("defs");
    this.key = key;
    this.elem = null;
  }

  createFilter() {
    console.log();
    var filter = this.defs
      .append("filter")
      .attr("id", this.filter_id)
      .attr("x", "0")
      .attr("y", "0")
      .attr("width", this.svg.node().getAttribute("width"))
      .attr("height", this.svg.node().getAttribute("height"))
      .attr("filterUnits", "userSpaceOnUse")
      .attr("color-interpolation-filters", "sRGB");

    filter
      .append("feFlood")
      .attr("flood-opacity", "0")
      .attr("result", "BackgroundImageFix");

    filter
      .append("feColorMatrix")
      .attr("in", "SourceAlpha")
      .attr("type", "matrix")
      .attr("values", "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0")
      .attr("result", "hardAlpha");

    filter.append("feOffset").attr("dy", "5");

    filter.append("feGaussianBlur").attr("stdDeviation", "12.5");

    filter
      .append("feColorMatrix")
      .attr("type", "matrix")
      .attr("values", "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0");

    filter
      .append("feBlend")
      .attr("mode", "normal")
      .attr("in2", "BackgroundImageFix")
      .attr("result", this.fe_blend_in2);

    filter
      .append("feBlend")
      .attr("mode", "normal")
      .attr("in", "SourceGraphic")
      .attr("in2", this.fe_blend_in2)
      .attr("result", "shape");
  }

  createLinearGradient() {
    var linearGradient = this.defs
      .append("linearGradient")
      .attr("id", this.gradient_id)
      .attr("x1", "35")
      .attr("y1", "20")
      .attr("x2", "35")
      .attr("y2", "40")
      .attr("gradientUnits", "userSpaceOnUse");

    linearGradient.append("stop").attr("stop-color", this.colors.color1);

    linearGradient
      .append("stop")
      .attr("offset", "1")
      .attr("stop-color", this.colors.color2);
  }

  createCircle() {
    this.elem = this.svg
      .append("g")
      .attr("filter", "url(#" + this.filter_id + ")")
      .attr("fill", "none");

    this.elem
      .append("circle")
      .attr("cx", 10)
      .attr("cy", 10)
      .attr("r", "10")
      .attr("fill", "url(#" + this.gradient_id + ")");

    this.elem
      .append("circle")
      .attr("cx", 10)
      .attr("cy", 10)
      .attr("r", "8")
      .attr("stroke", "white")
      .attr("stroke-opacity", "0.5")
      .attr("stroke-width", "4");

    return this.elem;
  }

  move(x, y) {
    this.elem.attr("transform", "translate(" + (x - 10) + "," + (y - 10) + ")");
  }

  hide() {
    this.elem.attr("opacity", "0");
  }

  show() {
    this.elem.attr("opacity", "1");
  }

  init() {
    this.createFilter();
    this.createLinearGradient();
    this.createCircle();
    this.hide();
  }
}

class Tooltip {
  constructor(svg, colors) {
    this.svg = svg;
    this.colors = colors;
    this.elem = null;
    this.successfulChatsValueElem = null;
    this.successfulChatsLabelElem = null;
    this.pendingMessagesValueElem = null;
    this.pendingMessagesLabelElem = null;
    this.rectWidth = 182;
    this.rectHeight = 79;
    this.rectPosX = -this.rectWidth / 2;
    this.rectPosY = 8;
    this.init();
  }

  createTooltip() {
    this.elem = this.svg
      .append("g")
      .style("transition", "transform 0.2s linear, opacity 0.2s linear");

    this.elem
      .append("rect")
      .attr("width", this.rectWidth)
      .attr("height", this.rectHeight)
      .attr("fill", "rgba(255, 255, 255, 0.8)")
      .style("box-shadow", "0px 4px 20px 0px rgba(54, 102, 148, 0.10)")
      .attr("rx", "15")
      .attr("ry", "15")
      .attr("x", this.rectPosX)
      .attr("y", this.rectPosY);

    this.successfulChatsValueElem = this.elem
      .append("text")
      .attr("x", this.rectPosX + 13)
      .attr("y", this.rectPosY + 21 + 14)
      .attr("font-size", "14")
      .attr("font-family", "TT Firs Neue Trial Var Roman")
      .attr("font-weight", "300")
      .attr("fill", this.colors.successfulChats.color3)
      .attr("opacity", "0.5");

    this.successfulChatsLabelElem = this.elem
      .append("text")
      .attr("x", 0)
      .attr("y", this.rectPosY + 23 + 12)
      .attr("font-size", "12")
      .attr("font-family", "TT Firs Neue Trial Var Roman")
      .attr("font-weight", "400")
      .attr("fill", "rgba(21, 41, 48, 0.70)")
      .text("Successful chats");

    this.pendingMessagesValueElem = this.elem
      .append("text")
      .attr("x", this.rectPosX + 13)
      .attr("y", this.rectPosY + 47 + 14)
      .attr("font-size", "14")
      .attr("font-family", "TT Firs Neue Trial Var Roman")
      .attr("font-weight", "300")
      .attr("fill", this.colors.pendingMessages.color3)
      .attr("opacity", "0.5");

    this.pendingMessagesLabelElem = this.elem
      .append("text")
      .attr("x", 0)
      .attr("y", this.rectPosY + 48 + 12)
      .attr("font-size", "12")
      .attr("font-family", "TT Firs Neue Trial Var Roman")
      .attr("font-weight", "400")
      .attr("fill", "rgba(21, 41, 48, 0.70)")
      .text("Pending Messages");
  }

  setTextValue(successfulChats, pendingMessages) {
    this.successfulChatsValueElem.text(successfulChats);
    this.pendingMessagesValueElem.text(pendingMessages);

    const successfulChatsTextWidth = this.successfulChatsValueElem
      .node()
      .getBBox().width;

    const pendingMessagesTextWidth = this.pendingMessagesValueElem
      .node()
      .getBBox().width;

    this.successfulChatsLabelElem.attr(
      "x",
      this.rectPosX + 13 + successfulChatsTextWidth + 8
    );
    this.pendingMessagesLabelElem.attr(
      "x",
      this.rectPosX + 13 + pendingMessagesTextWidth + 8
    );
  }

  move(x, y) {
    if (
      x >
      Number(this.svg.node().getAttribute("width")) - (this.rectWidth + 20)
    ) {
      x = x - this.rectWidth / 2 - 20;
    } else {
      x = x + this.rectWidth / 2 + 20;
    }

    // if (x < limitLeft) {
    // } else {
    //   x = x - this.rectWidth / 2 - 20;
    // }

    // else {
    //   x = x + this.rectWidth / 2;
    // }

    if (
      y >
      Number(this.svg.node().getAttribute("height")) - (this.rectHeight + 20)
    ) {
      y = y - this.rectHeight;
    }

    this.elem.attr("transform", "translate(" + x + "," + (y - 10) + ")");
  }

  hide() {
    this.elem.attr("opacity", "0");
  }

  show() {
    this.elem.attr("opacity", "1");
  }

  init() {
    this.createTooltip();
    this.setTextValue(0, 0);
    this.hide();
  }
}

(function () {
  const colors = {
    successfulChats: {
      color1: "#2AC870",
      color2: "#29C1AF",
      color3: "#068374",
    },
    pendingMessages: {
      color1: "#B09FFF",
      color2: "#8D79F6",
      color3: "#6A59BA",
    },
  };

  function createGradient(svg, id, color1, color2) {
    const gradient = svg
      .append("defs")
      .append("linearGradient")
      .attr("id", id)
      .attr("x1", "50%")
      .attr("y1", "0%")
      .attr("x2", "50%")
      .attr("y2", "100%");

    gradient
      .append("stop")
      .attr("stop-color", color1)
      .attr("stop-opacity", 0.4);

    gradient
      .append("stop")
      .attr("offset", 1)
      .attr("stop-color", color2)
      .attr("stop-opacity", 0);

    return gradient;
  }

  const container = document.querySelector("#performance-overview-chart");
  const marginTop = 20;
  const marginLeft = 20;
  const marginBottom = 30;
  const marginRight = 20;
  const svg = d3.create("svg");

  container.append(svg.node());

  function initChart() {
    svg.selectAll("*").remove();

    const width = container.offsetWidth;
    const height = container.offsetHeight;

    // Declare the x (horizontal position) scale.
    const x = d3
      .scaleTime()
      .domain(d3.extent(perfomanceOverviewData.map((d) => d.date)))
      .range([marginLeft, width - marginRight]);

    // Declare the y (vertical position) scale.
    const y = d3
      .scaleLinear()
      .domain(
        d3.extent([
          ...perfomanceOverviewData.map((d) => d.successfulChats),
          ...perfomanceOverviewData.map((d) => d.pendingMessages),
        ])
      )
      .range([height - marginBottom, marginTop]);

    // Create the SVG container.
    svg.attr("width", width).attr("height", height);

    // Add the x-axis.
    const xAxis = d3.axisBottom(x).tickFormat(d3.timeFormat("%b"));

    // Add the y-axis.
    // const yAxis = d3.axisLeft(y);

    // Add the Area function.
    const area = (data, key, x, y) =>
      d3
        .area()
        .x((d) => x(d.date))
        .y0(y(0))
        .y1((d) => y(d[key]))
        .curve(d3.curveCardinal)(data);

    // Add the Line function.
    const line = (data, key, x, y) =>
      d3
        .line()
        .x(function (d) {
          return x(d.date);
        })
        .y(function (d) {
          return y(d[key]);
        })
        .curve(d3.curveCardinal)(data); // This makes the line chart more curved.

    function createArea(svg, data, key, x, y, gradient) {
      return svg
        .append("path")
        .attr("fill", gradient)
        .attr("d", area(data, key, x, y));
    }

    function createLine(svg, data, key, x, y, color) {
      return svg
        .append("path")
        .datum(data)
        .attr("fill", "none")
        .attr("stroke", color)
        .attr("stroke-width", 5)
        .attr("d", line(data, key, x, y));
    }

    // Add the y-axis.
    svg
      .append("g")
      .attr("transform", `translate(0,${height - marginBottom})`)
      .attr("id", "x-axis-text")
      .call(xAxis)
      .selectAll("text")
      .style("text-anchor", "middle")
      .style("font-family", "TT Firs Neue Trial Var Roman")
      .style("font-size", "12px")
      .style("line-height", "14.32px")
      .style("font-weight", "500")
      .style("fill", "#454459")
      .style("opacity", "0.5");

    // Add the y-axis.
    // svg.append("g").attr("transform", `translate(${marginLeft},0)`).call(yAxis);

    svg
      .append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(d3.axisBottom(x).tickSizeInner(-height))
      .attr(
        "style",
        "stroke: #171724; stroke-dasharray: 1,14; opacity: 0.3; stroke-linecap: round;"
      );

    svg.selectAll(".domain").style("color", "transparent").attr("opacity", "0");

    // Hide text x-axis
    svg
      .selectAll("#x-axis-text line")
      .style("color", "transparent")
      .attr("opacity", "0");

    /**
     * GRADIENT
     */

    createGradient(svg, "gradient_1", "#2AC870", "#2AC870");
    createGradient(svg, "gradient_2", "#a391fc", "#a391fc");

    /**
     * AREA
     */

    createArea(
      svg,
      perfomanceOverviewData,
      "successfulChats",
      x,
      y,
      "url(#gradient_1)"
    );
    createArea(
      svg,
      perfomanceOverviewData,
      "pendingMessages",
      x,
      y,
      "url(#gradient_2)"
    );

    /**
     * LINE
     */

    createLine(svg, perfomanceOverviewData, "successfulChats", x, y, "#2AC870");
    createLine(svg, perfomanceOverviewData, "pendingMessages", x, y, "#B09FFF");

    /**
     * ACTIVE DOT
     */

    const activeDotSuccessfulChats = new ActiveDot(
      svg,
      colors.successfulChats,
      "successfulChats"
    );

    activeDotSuccessfulChats.init();

    const activeDotPendingMessages = new ActiveDot(
      svg,
      colors.pendingMessages,
      "pendingMessages"
    );

    activeDotPendingMessages.init();

    /**
     * TOOLTIP
     */

    const tooltip = new Tooltip(svg, colors);
    tooltip.move(width / 2 - tooltip.rectWidth / 2, height / 2);
    /**
     * MOUSE EVENTS
     */
    svg.on("mouseenter", function () {
      activeDotSuccessfulChats.show();
      activeDotPendingMessages.show();
    });

    svg.on("mouseleave", function () {
      activeDotSuccessfulChats.hide();
      activeDotPendingMessages.hide();
      tooltip.hide();
    });

    svg.on("mousemove", function (event) {
      const [mx, my] = d3.pointer(event, svg.node());

      activeDotPendingMessages.show();
      activeDotSuccessfulChats.show();

      tooltip.show();

      const bisectDate = d3.bisector((d) => d.date).left;
      const x0 = x.invert(mx);
      let i = bisectDate(perfomanceOverviewData, x0, 1);

      if (i >= perfomanceOverviewData.length)
        i = perfomanceOverviewData.length - 1;

      const d0 = perfomanceOverviewData[i - 1];
      const d1 = perfomanceOverviewData[i];
      const d = x0 - (d0 ? d0.date : 0) > (d1 ? d1.date : 0) - x0 ? d1 : d0;

      if (!d) return;

      activeDotSuccessfulChats.move(x(d.date), y(d.successfulChats));
      activeDotPendingMessages.move(x(d.date), y(d.pendingMessages));

      tooltip.move(x(d.date), my);
      tooltip.setTextValue(
        formatNumber(d.successfulChats),
        formatNumber(d.pendingMessages)
      );
    });
  }

  initChart();

  window.addEventListener("resize", initChart);
})();

(function () {
  const container = document.querySelector("#set-up-progress-chart");
  const svg = d3.create("svg");
  const twoPi = 2 * Math.PI,
    total = 100,
    formatPercent = d3.format(".0%");

  let progress = 0;

  container.append(svg.node());

  function initChart() {
    svg.selectAll("*").remove();

    const width = container.offsetWidth > 162 ? 162 : container.offsetWidth;
    const height = width;

    var arc = d3
      .arc()
      .startAngle(0)
      .innerRadius(width / 2 - 10)
      .outerRadius(width / 2)
      .cornerRadius(10);

    svg.attr("width", width).attr("height", height);

    const group = svg
      .append("g")
      .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

    var meter = group.append("g").attr("class", "funds-allocated-meter");

    meter
      .append("path")
      .attr("fill", "url(#gradientbg1)")
      .attr("opacity", 0.2)
      .attr("d", arc.endAngle(twoPi));

    var foreground = meter.append("path").attr("fill", "url(#gradientbg2)");

    var percentComplete = meter
      .append("text")
      .attr("text-anchor", "middle")
      .attr("class", "percent-complete")
      .attr("dy", ".3em")
      .style("font-family", "TT Firs Neue Trial Var Roman")
      .style("font-size", "30px")
      .style("font-weight", "400")
      .style("line-height", "normal")
      .style("letter-spacing", "-0.6px")
      .attr("fill", "#2AC870");

    var i = d3.interpolate(progress, setUpProgressTotal / total);

    d3.transition()
      .duration(1000)
      .tween("progress", function () {
        return function (t) {
          progress = i(t);
          foreground.attr("d", arc.endAngle(twoPi * progress));
          percentComplete.text(formatPercent(progress));
        };
      });

    // Append the defs to the SVG
    var defs = svg.append("defs");

    // Append the linearGradient to the defs
    var linearGradient1 = defs
      .append("linearGradient")
      .attr("id", "gradientbg1")
      .attr("x1", "-2.60643")
      .attr("y1", "9.66054")
      .attr("x2", "171.473")
      .attr("y2", "21.388")
      .attr("gradientUnits", "userSpaceOnUse");

    // Append the stops to the linearGradient
    linearGradient1.append("stop").attr("stop-color", "#32839D");

    linearGradient1
      .append("stop")
      .attr("offset", "0.789561")
      .attr("stop-color", "#2AC870");

    var linearGradient2 = defs
      .append("linearGradient")
      .attr("id", "gradientbg2")
      .attr("x1", "81")
      .attr("y1", "-24")
      .attr("x2", "81")
      .attr("y2", "138")
      .attr("gradientUnits", "userSpaceOnUse");

    // Append the stops to the linearGradient
    linearGradient2.append("stop").attr("stop-color", "#2AC870");

    linearGradient2
      .append("stop")
      .attr("offset", "1")
      .attr("stop-color", "#29C1AF");
  }

  initChart();

  window.addEventListener("resize", initChart);
})();
