<!DOCTYPE HTML>
<html>
	<head>
		<title>LARAVEL VIEWS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <style>
      @import url("fontawesome-all.min.css");
@import url("https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic|Source+Code+Pro:400");
html, body, div, span, applet, object,
iframe, h1, h2, h3, h4, h5, h6, p, blockquote,
pre, a, abbr, acronym, address, big, cite,
code, del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var, b,
u, i, center, dl, dt, dd, ol, ul, li, fieldset,
form, label, legend, table, caption, tbody,
tfoot, thead, tr, th, td, article, aside,
canvas, details, embed, figure, figcaption,
footer, header, hgroup, menu, nav, output, ruby,
section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;}

body {
	line-height: 1;
}

ol, ul {
	list-style: none;
}

blockquote, q {
	quotes: none;
}

	blockquote:before, blockquote:after, q:before, q:after {
		content: '';
		content: none;
	}

table {
	border-collapse: collapse;
	border-spacing: 0;
}

body {
	-webkit-text-size-adjust: none;
}

mark {
	background-color: transparent;
	color: inherit;
}

input::-moz-focus-inner {
	border: 0;
	padding: 0;
}

input, select, textarea {
	-moz-appearance: none;
	-webkit-appearance: none;
	-ms-appearance: none;
	appearance: none;
}

/* Basic */

	html {
		box-sizing: border-box;
	}

	*, *:before, *:after {
		box-sizing: inherit;
	}

	body {
		background: #fff;
	}

		body.is-preload *, body.is-preload *:before, body.is-preload *:after {
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
			-moz-transition: none !important;
			-webkit-transition: none !important;
			-ms-transition: none !important;
			transition: none !important;
		}

	body, input, select, textarea {
		color: #888;
		font-family: "Lato", sans-serif;
		font-size: 16pt;
		font-weight: 400;
		line-height: 1.75em;
	}

	a {
		-moz-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out;
		-webkit-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out;
		-ms-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out;
		transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out;
		border-bottom: solid 1px #e4e4e4;
		color: inherit;
		text-decoration: none;
	}

		a:hover {
			border-bottom-color: transparent;
			color: #f44236 !important;
		}

	strong, b {
		color: #777;
		font-weight: 700;
	}

	em, i {
		font-style: italic;
	}

	p {
		margin: 0 0 2.25em 0;
	}

	h1, h2, h3, h4, h5, h6 {
		color: #777;
		font-weight: 700;
		line-height: 1em;
		margin: 0 0 0.5625em 0;
	}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
			border: 0;
			color: inherit;
			text-decoration: none;
		}

	h2 {
		font-size: 2em;
		line-height: 1.5em;
	}

	h3 {
		font-size: 1.75em;
		line-height: 1.5em;
	}

	h4 {
		font-size: 1.25em;
		line-height: 1.5em;
	}

	h5 {
		font-size: 0.9em;
		line-height: 1.5em;
	}

	h6 {
		font-size: 0.7em;
		line-height: 1.5em;
	}

	sub {
		font-size: 0.8em;
		position: relative;
		top: 0.5em;
	}

	sup {
		font-size: 0.8em;
		position: relative;
		top: -0.5em;
	}

	hr {
		border: 0;
		border-bottom: solid 2px #f4f4f4;
		margin: 2.25em 0;
	}

		hr.major {
			margin: 3.375em 0;
		}

	blockquote {
		border-left: solid 8px #e4e4e4;
		font-style: italic;
		margin: 0 0 2.25em 0;
		padding: 0.5em 0 0.5em 2em;
	}

	code {
		background: #555;
		border-radius: 5px;
		color: #fff;
		font-family: "Source Code Pro", monospace;
		font-size: 0.9em;
		margin: 0 0.25em;
		padding: 0.25em 0.65em;
	}

	pre {
		font-family: "Source Code Pro", monospace;
		font-size: 0.9em;
		margin: 0 0 2.25em 0;
	}

		pre code {
			-webkit-overflow-scrolling: touch;
			display: block;
			line-height: 1.5em;
			overflow-x: auto;
			padding: 1em 1.5em;
		}

	.align-left {
		text-align: left;
	}

	.align-center {
		text-align: center;
	}

	.align-right {
		text-align: right;
	}

/* Row */

	.row {
		display: flex;
		flex-wrap: wrap;
		box-sizing: border-box;
		align-items: stretch;
	}

		.row > * {
			box-sizing: border-box;
		}

		.row.gtr-uniform > * > :last-child {
			margin-bottom: 0;
		}

		.row.aln-left {
			justify-content: flex-start;
		}

		.row.aln-center {
			justify-content: center;
		}

		.row.aln-right {
			justify-content: flex-end;
		}

		.row.aln-top {
			align-items: flex-start;
		}

		.row.aln-middle {
			align-items: center;
		}

		.row.aln-bottom {
			align-items: flex-end;
		}

		.row > .imp {
			order: -1;
		}

		.row > .col-1 {
			width: 8.33333%;
		}

		.row > .off-1 {
			margin-left: 8.33333%;
		}

		.row > .col-2 {
			width: 16.66667%;
		}

		.row > .off-2 {
			margin-left: 16.66667%;
		}

		.row > .col-3 {
			width: 25%;
		}

		.row > .off-3 {
			margin-left: 25%;
		}

		.row > .col-4 {
			width: 33.33333%;
		}

		.row > .off-4 {
			margin-left: 33.33333%;
		}

		.row > .col-5 {
			width: 41.66667%;
		}

		.row > .off-5 {
			margin-left: 41.66667%;
		}

		.row > .col-6 {
			width: 50%;
		}

		.row > .off-6 {
			margin-left: 50%;
		}

		.row > .col-7 {
			width: 58.33333%;
		}

		.row > .off-7 {
			margin-left: 58.33333%;
		}

		.row > .col-8 {
			width: 66.66667%;
		}

		.row > .off-8 {
			margin-left: 66.66667%;
		}

		.row > .col-9 {
			width: 75%;
		}

		.row > .off-9 {
			margin-left: 75%;
		}

		.row > .col-10 {
			width: 83.33333%;
		}

		.row > .off-10 {
			margin-left: 83.33333%;
		}

		.row > .col-11 {
			width: 91.66667%;
		}

		.row > .off-11 {
			margin-left: 91.66667%;
		}

		.row > .col-12 {
			width: 100%;
		}

		.row > .off-12 {
			margin-left: 100%;
		}

		.row.gtr-0 {
			margin-top: 0;
			margin-left: 0em;
		}

			.row.gtr-0 > * {
				padding: 0 0 0 0em;
			}

			.row.gtr-0.gtr-uniform {
				margin-top: 0em;
			}

				.row.gtr-0.gtr-uniform > * {
					padding-top: 0em;
				}

		.row.gtr-25 {
			margin-top: 0;
			margin-left: -0.5em;
		}

			.row.gtr-25 > * {
				padding: 0 0 0 0.5em;
			}

			.row.gtr-25.gtr-uniform {
				margin-top: -0.5em;
			}

				.row.gtr-25.gtr-uniform > * {
					padding-top: 0.5em;
				}

		.row.gtr-50 {
			margin-top: 0;
			margin-left: -1em;
		}

			.row.gtr-50 > * {
				padding: 0 0 0 1em;
			}

			.row.gtr-50.gtr-uniform {
				margin-top: -1em;
			}

				.row.gtr-50.gtr-uniform > * {
					padding-top: 1em;
				}

		.row {
			margin-top: 0;
			margin-left: -2em;
		}

			.row > * {
				padding: 0 0 0 2em;
			}

			.row.gtr-uniform {
				margin-top: -2em;
			}

				.row.gtr-uniform > * {
					padding-top: 2em;
				}

		.row.gtr-150 {
			margin-top: 0;
			margin-left: -3em;
		}

			.row.gtr-150 > * {
				padding: 0 0 0 3em;
			}

			.row.gtr-150.gtr-uniform {
				margin-top: -3em;
			}

				.row.gtr-150.gtr-uniform > * {
					padding-top: 3em;
				}

		.row.gtr-200 {
			margin-top: 0;
			margin-left: -4em;
		}

			.row.gtr-200 > * {
				padding: 0 0 0 4em;
			}

			.row.gtr-200.gtr-uniform {
				margin-top: -4em;
			}

				.row.gtr-200.gtr-uniform > * {
					padding-top: 4em;
				}

		@media screen and (max-width: 1680px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-xlarge {
					order: -1;
				}

				.row > .col-1-xlarge {
					width: 8.33333%;
				}

				.row > .off-1-xlarge {
					margin-left: 8.33333%;
				}

				.row > .col-2-xlarge {
					width: 16.66667%;
				}

				.row > .off-2-xlarge {
					margin-left: 16.66667%;
				}

				.row > .col-3-xlarge {
					width: 25%;
				}

				.row > .off-3-xlarge {
					margin-left: 25%;
				}

				.row > .col-4-xlarge {
					width: 33.33333%;
				}

				.row > .off-4-xlarge {
					margin-left: 33.33333%;
				}

				.row > .col-5-xlarge {
					width: 41.66667%;
				}

				.row > .off-5-xlarge {
					margin-left: 41.66667%;
				}

				.row > .col-6-xlarge {
					width: 50%;
				}

				.row > .off-6-xlarge {
					margin-left: 50%;
				}

				.row > .col-7-xlarge {
					width: 58.33333%;
				}

				.row > .off-7-xlarge {
					margin-left: 58.33333%;
				}

				.row > .col-8-xlarge {
					width: 66.66667%;
				}

				.row > .off-8-xlarge {
					margin-left: 66.66667%;
				}

				.row > .col-9-xlarge {
					width: 75%;
				}

				.row > .off-9-xlarge {
					margin-left: 75%;
				}

				.row > .col-10-xlarge {
					width: 83.33333%;
				}

				.row > .off-10-xlarge {
					margin-left: 83.33333%;
				}

				.row > .col-11-xlarge {
					width: 91.66667%;
				}

				.row > .off-11-xlarge {
					margin-left: 91.66667%;
				}

				.row > .col-12-xlarge {
					width: 100%;
				}

				.row > .off-12-xlarge {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0;
					margin-left: 0em;
				}

					.row.gtr-0 > * {
						padding: 0 0 0 0em;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0em;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0em;
						}

				.row.gtr-25 {
					margin-top: 0;
					margin-left: -0.5em;
				}

					.row.gtr-25 > * {
						padding: 0 0 0 0.5em;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -0.5em;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 0.5em;
						}

				.row.gtr-50 {
					margin-top: 0;
					margin-left: -1em;
				}

					.row.gtr-50 > * {
						padding: 0 0 0 1em;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -1em;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 1em;
						}

				.row {
					margin-top: 0;
					margin-left: -2em;
				}

					.row > * {
						padding: 0 0 0 2em;
					}

					.row.gtr-uniform {
						margin-top: -2em;
					}

						.row.gtr-uniform > * {
							padding-top: 2em;
						}

				.row.gtr-150 {
					margin-top: 0;
					margin-left: -3em;
				}

					.row.gtr-150 > * {
						padding: 0 0 0 3em;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -3em;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 3em;
						}

				.row.gtr-200 {
					margin-top: 0;
					margin-left: -4em;
				}

					.row.gtr-200 > * {
						padding: 0 0 0 4em;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -4em;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 4em;
						}

		}

		@media screen and (max-width: 1280px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-large {
					order: -1;
				}

				.row > .col-1-large {
					width: 8.33333%;
				}

				.row > .off-1-large {
					margin-left: 8.33333%;
				}

				.row > .col-2-large {
					width: 16.66667%;
				}

				.row > .off-2-large {
					margin-left: 16.66667%;
				}

				.row > .col-3-large {
					width: 25%;
				}

				.row > .off-3-large {
					margin-left: 25%;
				}

				.row > .col-4-large {
					width: 33.33333%;
				}

				.row > .off-4-large {
					margin-left: 33.33333%;
				}

				.row > .col-5-large {
					width: 41.66667%;
				}

				.row > .off-5-large {
					margin-left: 41.66667%;
				}

				.row > .col-6-large {
					width: 50%;
				}

				.row > .off-6-large {
					margin-left: 50%;
				}

				.row > .col-7-large {
					width: 58.33333%;
				}

				.row > .off-7-large {
					margin-left: 58.33333%;
				}

				.row > .col-8-large {
					width: 66.66667%;
				}

				.row > .off-8-large {
					margin-left: 66.66667%;
				}

				.row > .col-9-large {
					width: 75%;
				}

				.row > .off-9-large {
					margin-left: 75%;
				}

				.row > .col-10-large {
					width: 83.33333%;
				}

				.row > .off-10-large {
					margin-left: 83.33333%;
				}

				.row > .col-11-large {
					width: 91.66667%;
				}

				.row > .off-11-large {
					margin-left: 91.66667%;
				}

				.row > .col-12-large {
					width: 100%;
				}

				.row > .off-12-large {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0;
					margin-left: 0em;
				}

					.row.gtr-0 > * {
						padding: 0 0 0 0em;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0em;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0em;
						}

				.row.gtr-25 {
					margin-top: 0;
					margin-left: -0.375em;
				}

					.row.gtr-25 > * {
						padding: 0 0 0 0.375em;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -0.375em;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 0.375em;
						}

				.row.gtr-50 {
					margin-top: 0;
					margin-left: -0.75em;
				}

					.row.gtr-50 > * {
						padding: 0 0 0 0.75em;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -0.75em;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 0.75em;
						}

				.row {
					margin-top: 0;
					margin-left: -1.5em;
				}

					.row > * {
						padding: 0 0 0 1.5em;
					}

					.row.gtr-uniform {
						margin-top: -1.5em;
					}

						.row.gtr-uniform > * {
							padding-top: 1.5em;
						}

				.row.gtr-150 {
					margin-top: 0;
					margin-left: -2.25em;
				}

					.row.gtr-150 > * {
						padding: 0 0 0 2.25em;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -2.25em;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 2.25em;
						}

				.row.gtr-200 {
					margin-top: 0;
					margin-left: -3em;
				}

					.row.gtr-200 > * {
						padding: 0 0 0 3em;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -3em;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 3em;
						}

		}

		@media screen and (max-width: 1024px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-medium {
					order: -1;
				}

				.row > .col-1-medium {
					width: 8.33333%;
				}

				.row > .off-1-medium {
					margin-left: 8.33333%;
				}

				.row > .col-2-medium {
					width: 16.66667%;
				}

				.row > .off-2-medium {
					margin-left: 16.66667%;
				}

				.row > .col-3-medium {
					width: 25%;
				}

				.row > .off-3-medium {
					margin-left: 25%;
				}

				.row > .col-4-medium {
					width: 33.33333%;
				}

				.row > .off-4-medium {
					margin-left: 33.33333%;
				}

				.row > .col-5-medium {
					width: 41.66667%;
				}

				.row > .off-5-medium {
					margin-left: 41.66667%;
				}

				.row > .col-6-medium {
					width: 50%;
				}

				.row > .off-6-medium {
					margin-left: 50%;
				}

				.row > .col-7-medium {
					width: 58.33333%;
				}

				.row > .off-7-medium {
					margin-left: 58.33333%;
				}

				.row > .col-8-medium {
					width: 66.66667%;
				}

				.row > .off-8-medium {
					margin-left: 66.66667%;
				}

				.row > .col-9-medium {
					width: 75%;
				}

				.row > .off-9-medium {
					margin-left: 75%;
				}

				.row > .col-10-medium {
					width: 83.33333%;
				}

				.row > .off-10-medium {
					margin-left: 83.33333%;
				}

				.row > .col-11-medium {
					width: 91.66667%;
				}

				.row > .off-11-medium {
					margin-left: 91.66667%;
				}

				.row > .col-12-medium {
					width: 100%;
				}

				.row > .off-12-medium {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0;
					margin-left: 0em;
				}

					.row.gtr-0 > * {
						padding: 0 0 0 0em;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0em;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0em;
						}

				.row.gtr-25 {
					margin-top: 0;
					margin-left: -0.375em;
				}

					.row.gtr-25 > * {
						padding: 0 0 0 0.375em;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -0.375em;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 0.375em;
						}

				.row.gtr-50 {
					margin-top: 0;
					margin-left: -0.75em;
				}

					.row.gtr-50 > * {
						padding: 0 0 0 0.75em;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -0.75em;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 0.75em;
						}

				.row {
					margin-top: 0;
					margin-left: -1.5em;
				}

					.row > * {
						padding: 0 0 0 1.5em;
					}

					.row.gtr-uniform {
						margin-top: -1.5em;
					}

						.row.gtr-uniform > * {
							padding-top: 1.5em;
						}

				.row.gtr-150 {
					margin-top: 0;
					margin-left: -2.25em;
				}

					.row.gtr-150 > * {
						padding: 0 0 0 2.25em;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -2.25em;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 2.25em;
						}

				.row.gtr-200 {
					margin-top: 0;
					margin-left: -3em;
				}

					.row.gtr-200 > * {
						padding: 0 0 0 3em;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -3em;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 3em;
						}

		}

		@media screen and (max-width: 736px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-small {
					order: -1;
				}

				.row > .col-1-small {
					width: 8.33333%;
				}

				.row > .off-1-small {
					margin-left: 8.33333%;
				}

				.row > .col-2-small {
					width: 16.66667%;
				}

				.row > .off-2-small {
					margin-left: 16.66667%;
				}

				.row > .col-3-small {
					width: 25%;
				}

				.row > .off-3-small {
					margin-left: 25%;
				}

				.row > .col-4-small {
					width: 33.33333%;
				}

				.row > .off-4-small {
					margin-left: 33.33333%;
				}

				.row > .col-5-small {
					width: 41.66667%;
				}

				.row > .off-5-small {
					margin-left: 41.66667%;
				}

				.row > .col-6-small {
					width: 50%;
				}

				.row > .off-6-small {
					margin-left: 50%;
				}

				.row > .col-7-small {
					width: 58.33333%;
				}

				.row > .off-7-small {
					margin-left: 58.33333%;
				}

				.row > .col-8-small {
					width: 66.66667%;
				}

				.row > .off-8-small {
					margin-left: 66.66667%;
				}

				.row > .col-9-small {
					width: 75%;
				}

				.row > .off-9-small {
					margin-left: 75%;
				}

				.row > .col-10-small {
					width: 83.33333%;
				}

				.row > .off-10-small {
					margin-left: 83.33333%;
				}

				.row > .col-11-small {
					width: 91.66667%;
				}

				.row > .off-11-small {
					margin-left: 91.66667%;
				}

				.row > .col-12-small {
					width: 100%;
				}

				.row > .off-12-small {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0;
					margin-left: 0em;
				}

					.row.gtr-0 > * {
						padding: 0 0 0 0em;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0em;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0em;
						}

				.row.gtr-25 {
					margin-top: 0;
					margin-left: -0.3125em;
				}

					.row.gtr-25 > * {
						padding: 0 0 0 0.3125em;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -0.3125em;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 0.3125em;
						}

				.row.gtr-50 {
					margin-top: 0;
					margin-left: -0.625em;
				}

					.row.gtr-50 > * {
						padding: 0 0 0 0.625em;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -0.625em;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 0.625em;
						}

				.row {
					margin-top: 0;
					margin-left: -1.25em;
				}

					.row > * {
						padding: 0 0 0 1.25em;
					}

					.row.gtr-uniform {
						margin-top: -1.25em;
					}

						.row.gtr-uniform > * {
							padding-top: 1.25em;
						}

				.row.gtr-150 {
					margin-top: 0;
					margin-left: -1.875em;
				}

					.row.gtr-150 > * {
						padding: 0 0 0 1.875em;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -1.875em;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 1.875em;
						}

				.row.gtr-200 {
					margin-top: 0;
					margin-left: -2.5em;
				}

					.row.gtr-200 > * {
						padding: 0 0 0 2.5em;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -2.5em;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 2.5em;
						}

		}

		@media screen and (max-width: 480px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-xsmall {
					order: -1;
				}

				.row > .col-1-xsmall {
					width: 8.33333%;
				}

				.row > .off-1-xsmall {
					margin-left: 8.33333%;
				}

				.row > .col-2-xsmall {
					width: 16.66667%;
				}

				.row > .off-2-xsmall {
					margin-left: 16.66667%;
				}

				.row > .col-3-xsmall {
					width: 25%;
				}

				.row > .off-3-xsmall {
					margin-left: 25%;
				}

				.row > .col-4-xsmall {
					width: 33.33333%;
				}

				.row > .off-4-xsmall {
					margin-left: 33.33333%;
				}

				.row > .col-5-xsmall {
					width: 41.66667%;
				}

				.row > .off-5-xsmall {
					margin-left: 41.66667%;
				}

				.row > .col-6-xsmall {
					width: 50%;
				}

				.row > .off-6-xsmall {
					margin-left: 50%;
				}

				.row > .col-7-xsmall {
					width: 58.33333%;
				}

				.row > .off-7-xsmall {
					margin-left: 58.33333%;
				}

				.row > .col-8-xsmall {
					width: 66.66667%;
				}

				.row > .off-8-xsmall {
					margin-left: 66.66667%;
				}

				.row > .col-9-xsmall {
					width: 75%;
				}

				.row > .off-9-xsmall {
					margin-left: 75%;
				}

				.row > .col-10-xsmall {
					width: 83.33333%;
				}

				.row > .off-10-xsmall {
					margin-left: 83.33333%;
				}

				.row > .col-11-xsmall {
					width: 91.66667%;
				}

				.row > .off-11-xsmall {
					margin-left: 91.66667%;
				}

				.row > .col-12-xsmall {
					width: 100%;
				}

				.row > .off-12-xsmall {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0;
					margin-left: 0em;
				}

					.row.gtr-0 > * {
						padding: 0 0 0 0em;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0em;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0em;
						}

				.row.gtr-25 {
					margin-top: 0;
					margin-left: -0.3125em;
				}

					.row.gtr-25 > * {
						padding: 0 0 0 0.3125em;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -0.3125em;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 0.3125em;
						}

				.row.gtr-50 {
					margin-top: 0;
					margin-left: -0.625em;
				}

					.row.gtr-50 > * {
						padding: 0 0 0 0.625em;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -0.625em;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 0.625em;
						}

				.row {
					margin-top: 0;
					margin-left: -1.25em;
				}

					.row > * {
						padding: 0 0 0 1.25em;
					}

					.row.gtr-uniform {
						margin-top: -1.25em;
					}

						.row.gtr-uniform > * {
							padding-top: 1.25em;
						}

				.row.gtr-150 {
					margin-top: 0;
					margin-left: -1.875em;
				}

					.row.gtr-150 > * {
						padding: 0 0 0 1.875em;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -1.875em;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 1.875em;
						}

				.row.gtr-200 {
					margin-top: 0;
					margin-left: -2.5em;
				}

					.row.gtr-200 > * {
						padding: 0 0 0 2.5em;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -2.5em;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 2.5em;
						}

		}

/* Container */

	.container {
		margin: 0 auto;
		max-width: calc(100% - 4.5em);
		width: 45em;
	}

		.container.xsmall {
			width: 11.25em;
		}

		.container.small {
			width: 22.5em;
		}

		.container.medium {
			width: 33.75em;
		}

		.container.large {
			width: 56.25em;
		}

		.container.xlarge {
			width: 67.5em;
		}

		.container.max {
			width: 100%;
		}

		@media screen and (max-width: 1024px) {

			.container {
				width: 100% !important;
			}

		}

		@media screen and (max-width: 480px) {

			.container {
				max-width: calc(100% - 3.375em);
			}

		}

/* Section/Article */

	section.special, article.special {
		text-align: center;
	}

	header p {
		color: #aaa;
		position: relative;
		margin: 0 0 1.6875em 0;
	}

	header h2 + p {
		font-size: 1.25em;
		margin-top: -0.5em;
		line-height: 1.5em;
	}

	header h3 + p {
		font-size: 1.1em;
		margin-top: -0.35em;
		line-height: 1.5em;
	}

	header h4 + p,
	header h5 + p,
	header h6 + p {
		font-size: 0.9em;
		margin-top: -0.25em;
		line-height: 1.5em;
	}

	header.major h2 {
		color: #f44236;
		font-size: 3.5em;
	}

		header.major h2 + p {
			color: #777;
			font-size: 1.75em;
			font-weight: 700;
			margin-top: -0.75em;
		}

/* Form */

	form {
		margin: 0 0 2.25em 0;
	}

	label {
		color: #777;
		display: block;
		font-size: 0.9em;
		font-weight: 700;
		margin: 0 0 1.125em 0;
	}

	input::-moz-focus-inner {
		border: 0;
		padding: 0;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select,
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		border-radius: 5px;
		border: none;
		border: solid 2px #e4e4e4;
		color: inherit;
		display: block;
		outline: 0;
		padding: 0 1em;
		text-decoration: none;
		width: 100%;
	}

		input[type="text"]:invalid,
		input[type="password"]:invalid,
		input[type="email"]:invalid,
		select:invalid,
		textarea:invalid {
			box-shadow: none;
		}

		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="email"]:focus,
		select:focus,
		textarea:focus {
			border-color: #f44236;
		}

	select {
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='%23e4e4e4' /%3E%3C/svg%3E");
		background-size: 1.25em;
		background-repeat: no-repeat;
		background-position: calc(100% - 1em) center;
		height: 2.75em;
		padding-right: 2.75em;
		text-overflow: ellipsis;
	}

		select option {
			color: #777;
			background: #fff;
		}

		select:focus::-ms-value {
			background-color: transparent;
		}

		select::-ms-expand {
			display: none;
		}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select {
		height: 2.75em;
	}

	textarea {
		padding: 0.75em 1em;
	}

	input[type="checkbox"],
	input[type="radio"] {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		display: block;
		float: left;
		margin-right: -2em;
		opacity: 0;
		width: 1em;
		z-index: -1;
	}

		input[type="checkbox"] + label,
		input[type="radio"] + label {
			text-decoration: none;
			color: #888;
			cursor: pointer;
			display: inline-block;
			font-size: 1em;
			font-weight: 400;
			padding-left: 2.4em;
			padding-right: 0.75em;
			position: relative;
		}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				display: inline-block;
				font-style: normal;
				font-variant: normal;
				text-rendering: auto;
				line-height: 1;
				text-transform: none !important;
				font-family: 'Font Awesome 5 Free';
				font-weight: 900;
			}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				background: #fafafa;
				border-radius: 5px;
				border: solid 2px #e4e4e4;
				content: '';
				display: inline-block;
				font-size: 0.8em;
				height: 2.0625em;
				left: 0;
				line-height: 2.0625em;
				position: absolute;
				text-align: center;
				top: 0;
				width: 2.0625em;
			}

		input[type="checkbox"]:checked + label:before,
		input[type="radio"]:checked + label:before {
			background: #989898;
			border-color: #989898;
			color: #ffffff;
			content: '\f00c';
		}

		input[type="checkbox"]:focus + label:before,
		input[type="radio"]:focus + label:before {
			border-color: #f44236;
		}

	input[type="checkbox"] + label:before {
		border-radius: 5px;
	}

	input[type="radio"] + label:before {
		border-radius: 100%;
	}

	::-webkit-input-placeholder {
		color: #aaa !important;
		font-style: italic;
		opacity: 1.0;
	}

	:-moz-placeholder {
		color: #aaa !important;
		font-style: italic;
		opacity: 1.0;
	}

	::-moz-placeholder {
		color: #aaa !important;
		font-style: italic;
		opacity: 1.0;
	}

	:-ms-input-placeholder {
		color: #aaa !important;
		font-style: italic;
		opacity: 1.0;
	}

/* Box */

	.box {
		border-radius: 5px;
		border: solid 2px #e4e4e4;
		margin-bottom: 2.25em;
		padding: 1.5em;
	}

		.box > :last-child,
		.box > :last-child > :last-child,
		.box > :last-child > :last-child > :last-child {
			margin-bottom: 0;
		}

		.box.alt {
			border: 0;
			border-radius: 0;
			padding: 0;
		}

/* Icon */

	.icon {
		text-decoration: none;
		border-bottom: none;
		position: relative;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			display: inline-block;
			font-style: normal;
			font-variant: normal;
			text-rendering: auto;
			line-height: 1;
			text-transform: none !important;
			font-family: 'Font Awesome 5 Free';
			font-weight: 400;
		}

		.icon > .label {
			display: none;
		}

		.icon:before {
			line-height: inherit;
		}

		.icon.solid:before {
			font-weight: 900;
		}

		.icon.brands:before {
			font-family: 'Font Awesome 5 Brands';
		}

/* Image */

	.image {
		border-radius: 5px;
		border: 0;
		display: inline-block;
		position: relative;
	}

		.image[data-position] img {
			-moz-object-fit: cover;
			-webkit-object-fit: cover;
			-ms-object-fit: cover;
			object-fit: cover;
			display: block;
			position: absolute;
			top: -86px;
			left: 0;
			width: 100%;
			height: 100%;
		}

		.image[data-position="top left"] img {
			-moz-object-position: top left;
			-webkit-object-position: top left;
			-ms-object-position: top left;
			object-position: top left;
		}

		.image[data-position="top"] img {
			-moz-object-position: top;
			-webkit-object-position: top;
			-ms-object-position: top;
			object-position: top;
		}

		.image[data-position="top right"] img {
			-moz-object-position: top right;
			-webkit-object-position: top right;
			-ms-object-position: top right;
			object-position: top right;
		}

		.image[data-position="right"] img {
			-moz-object-position: right;
			-webkit-object-position: right;
			-ms-object-position: right;
			object-position: right;
		}

		.image[data-position="bottom right"] img {
			-moz-object-position: bottom right;
			-webkit-object-position: bottom right;
			-ms-object-position: bottom right;
			object-position: bottom right;
		}

		.image[data-position="bottom"] img {
			-moz-object-position: bottom;
			-webkit-object-position: bottom;
			-ms-object-position: bottom;
			object-position: bottom;
		}

		.image[data-position="bottom left"] img {
			-moz-object-position: bottom left;
			-webkit-object-position: bottom left;
			-ms-object-position: bottom left;
			object-position: bottom left;
		}

		.image[data-position="left"] img {
			-moz-object-position: left;
			-webkit-object-position: left;
			-ms-object-position: left;
			object-position: left;
		}

		.image[data-position="center"] img {
			-moz-object-position: center;
			-webkit-object-position: center;
			-ms-object-position: center;
			object-position: center;
		}

		.image[data-position="25% 25%"] img {
			-moz-object-position: 25% 25%;
			-webkit-object-position: 25% 25%;
			-ms-object-position: 25% 25%;
			object-position: 25% 25%;
		}

		.image[data-position="75% 25%"] img {
			-moz-object-position: 75% 25%;
			-webkit-object-position: 75% 25%;
			-ms-object-position: 75% 25%;
			object-position: 75% 25%;
		}

		.image[data-position="75% 75%"] img {
			-moz-object-position: 75% 75%;
			-webkit-object-position: 75% 75%;
			-ms-object-position: 75% 75%;
			object-position: 75% 75%;
		}

		.image[data-position="25% 75%"] img {
			-moz-object-position: 25% 75%;
			-webkit-object-position: 25% 75%;
			-ms-object-position: 25% 75%;
			object-position: 25% 75%;
		}

		.image img {
			border-radius: 5px;
			display: block;
		}

		.image.left {
			float: left;
			margin: 0 2.5em 2em 0;
			top: 0.25em;
		}

		.image.right {
			float: right;
			margin: 0 0 2em 2.5em;
			top: 0.25em;
		}

		.image.fit {
			display: block;
			margin: 0 0 2.25em 0;
			width: 100%;
		}

			.image.fit img {
				display: block;
				width: 100%;
			}

		.image.avatar {
			border-radius: 100%;
			overflow: hidden;
		}

			.image.avatar img {
				border-radius: 100%;
				display: block;
				width: 100%;
			}

		.image.main {
			display: block;
			height: 20em;
			border-radius: 0;
		}

			.image.main img {
				border-radius: 0;
			}

/* List */

	ol {
		list-style: decimal;
		margin: 0 0 2.25em 0;
		padding-left: 1.25em;
	}

		ol li {
			padding-left: 0.25em;
		}

	ul {
		list-style: disc;
		margin: 0 0 2.25em 0;
		padding-left: 1em;
	}

		ul li {
			padding-left: 0.5em;
		}

		ul.alt {
			list-style: none;
			padding-left: 0;
		}

			ul.alt li {
				border-top: solid 2px #f4f4f4;
				padding: 0.5em 0;
			}

				ul.alt li:first-child {
					border-top: 0;
					padding-top: 0;
				}

	dl {
		margin: 0 0 2.25em 0;
	}

/* Actions */

	ul.actions {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		cursor: default;
		list-style: none;
		margin-left: -1.125em;
		padding-left: 0;
	}

		ul.actions li {
			padding: 0 0 0 1.125em;
			vertical-align: middle;
		}

		ul.actions.special {
			-moz-justify-content: center;
			-webkit-justify-content: center;
			-ms-justify-content: center;
			justify-content: center;
			width: 100%;
			margin-left: 0;
		}

			ul.actions.special li:first-child {
				padding-left: 0;
			}

		ul.actions.stacked {
			-moz-flex-direction: column;
			-webkit-flex-direction: column;
			-ms-flex-direction: column;
			flex-direction: column;
			margin-left: 0;
		}

			ul.actions.stacked li {
				padding: 1.125em 0 0 0;
			}

				ul.actions.stacked li:first-child {
					padding-top: 0;
				}

		ul.actions.fit {
			width: calc(100% + 1.125em);
		}

			ul.actions.fit li {
				-moz-flex-grow: 1;
				-webkit-flex-grow: 1;
				-ms-flex-grow: 1;
				flex-grow: 1;
				-moz-flex-shrink: 1;
				-webkit-flex-shrink: 1;
				-ms-flex-shrink: 1;
				flex-shrink: 1;
				width: 100%;
			}

				ul.actions.fit li > * {
					width: 100%;
				}

			ul.actions.fit.stacked {
				width: 100%;
			}

		@media screen and (max-width: 480px) {

			ul.actions:not(.fixed) {
				-moz-flex-direction: column;
				-webkit-flex-direction: column;
				-ms-flex-direction: column;
				flex-direction: column;
				margin-left: 0;
				width: 100% !important;
			}

				ul.actions:not(.fixed) li {
					-moz-flex-grow: 1;
					-webkit-flex-grow: 1;
					-ms-flex-grow: 1;
					flex-grow: 1;
					-moz-flex-shrink: 1;
					-webkit-flex-shrink: 1;
					-ms-flex-shrink: 1;
					flex-shrink: 1;
					padding: 1.125em 0 0 0;
					text-align: center;
					width: 100%;
				}

					ul.actions:not(.fixed) li > * {
						width: 100%;
					}

					ul.actions:not(.fixed) li:first-child {
						padding-top: 0;
					}

					ul.actions:not(.fixed) li input[type="submit"],
					ul.actions:not(.fixed) li input[type="reset"],
					ul.actions:not(.fixed) li input[type="button"],
					ul.actions:not(.fixed) li button,
					ul.actions:not(.fixed) li .button {
						width: 100%;
					}

						ul.actions:not(.fixed) li input[type="submit"].icon:before,
						ul.actions:not(.fixed) li input[type="reset"].icon:before,
						ul.actions:not(.fixed) li input[type="button"].icon:before,
						ul.actions:not(.fixed) li button.icon:before,
						ul.actions:not(.fixed) li .button.icon:before {
							margin-left: -0.5rem;
						}

		}

/* Feature Icons */

	ul.feature-icons {
		list-style: none;
		padding-left: 0;
	}

		ul.feature-icons li {
			text-decoration: none;
			display: inline-block;
			margin: 0 0 1.6875em 0;
			padding: 0.35em 0 0 3.5em;
			position: relative;
			vertical-align: top;
			width: 48%;
		}

			ul.feature-icons li:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				display: inline-block;
				font-style: normal;
				font-variant: normal;
				text-rendering: auto;
				line-height: 1;
				text-transform: none !important;
				font-family: 'Font Awesome 5 Free';
				font-weight: 400;
			}

			ul.feature-icons li:before {
				background: #f44236;
				border-radius: 100%;
				color: #ffffff;
				display: block;
				height: 2.5em;
				left: 0;
				line-height: 2.5em;
				position: absolute;
				text-align: center;
				top: 0;
				width: 2.5em;
			}

/* Icons */

	ul.icons {
		cursor: default;
		list-style: none;
		padding-left: 0;
	}

		ul.icons li {
			display: inline-block;
			padding: 0 1em 0 0;
		}

			ul.icons li:last-child {
				padding-right: 0 !important;
			}

			ul.icons li .icon:before {
				font-size: 1.25em;
			}

/* Table */

	.table-wrapper {
		-webkit-overflow-scrolling: touch;
		overflow-x: auto;
	}

	table {
		margin: 0 0 2.25em 0;
		width: 100%;
	}

		table tbody tr {
			border: solid 2px #f4f4f4;
			border-left: 0;
			border-right: 0;
		}

			table tbody tr:nth-child(2n + 1) {
				background-color: #fafafa;
			}

		table td {
			padding: 0.75em 0.75em;
		}

		table th {
			color: #777;
			font-size: 0.9em;
			font-weight: 700;
			padding: 0 0.75em 0.75em 0.75em;
			text-align: left;
		}

		table thead {
			border-bottom: solid 4px #e4e4e4;
		}

		table tfoot {
			border-top: solid 4px #e4e4e4;
		}

		table.alt {
			border-collapse: separate;
		}

			table.alt tbody tr td {
				border: solid 2px #e4e4e4;
				border-left-width: 0;
				border-top-width: 0;
			}

				table.alt tbody tr td:first-child {
					border-left-width: 2px;
				}

			table.alt tbody tr:first-child td {
				border-top-width: 2px;
			}

			table.alt thead {
				border-bottom: 0;
			}

			table.alt tfoot {
				border-top: 0;
			}

/* Button */

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	.button {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		background-color: #989898;
		border-radius: 5px;
		border: 0;
		color: #ffffff !important;
		cursor: pointer;
		display: inline-block;
		font-weight: 700;
		height: 2.75em;
		line-height: 2.75em;
		padding: 0 1.5em;
		text-align: center;
		text-decoration: none;
		white-space: nowrap;
	}

		input[type="submit"]:hover,
		input[type="reset"]:hover,
		input[type="button"]:hover,
		.button:hover {
			background-color: #a5a5a5;
			color: #ffffff !important;
		}

		input[type="submit"]:active,
		input[type="reset"]:active,
		input[type="button"]:active,
		.button:active {
			background-color: #8b8b8b;
		}

		input[type="submit"].icon,
		input[type="reset"].icon,
		input[type="button"].icon,
		.button.icon {
			padding-left: 1.35em;
		}

			input[type="submit"].icon:before,
			input[type="reset"].icon:before,
			input[type="button"].icon:before,
			.button.icon:before {
				margin-right: 0.5em;
			}

		input[type="submit"].fit,
		input[type="reset"].fit,
		input[type="button"].fit,
		.button.fit {
			width: 100%;
		}

		input[type="submit"].small,
		input[type="reset"].small,
		input[type="button"].small,
		.button.small {
			font-size: 0.8em;
		}

		input[type="submit"].large,
		input[type="reset"].large,
		input[type="button"].large,
		.button.large {
			font-size: 1.35em;
		}

		input[type="submit"].alt,
		input[type="reset"].alt,
		input[type="button"].alt,
		.button.alt {
			background-color: transparent;
			box-shadow: inset 0 0 0 2px #e4e4e4;
			color: #777 !important;
		}

			input[type="submit"].alt:hover,
			input[type="reset"].alt:hover,
			input[type="button"].alt:hover,
			.button.alt:hover {
				background-color: #f4f4f4;
				color: #777 !important;
			}

			input[type="submit"].alt:active,
			input[type="reset"].alt:active,
			input[type="button"].alt:active,
			.button.alt:active {
				background-color: #eaeaea;
			}

			input[type="submit"].alt.icon:before,
			input[type="reset"].alt.icon:before,
			input[type="button"].alt.icon:before,
			.button.alt.icon:before {
				color: #aaa;
			}

		input[type="submit"].primary,
		input[type="reset"].primary,
		input[type="button"].primary,
		.button.primary {
			background-color: #f44236;
			color: #ffffff !important;
		}

			input[type="submit"].primary:hover,
			input[type="reset"].primary:hover,
			input[type="button"].primary:hover,
			.button.primary:hover {
				background-color: #5ed0b1;
			}

			input[type="submit"].primary:active,
			input[type="reset"].primary:active,
			input[type="button"].primary:active,
			.button.primary:active {
				background-color: #39c29d;
			}

		input[type="submit"].disabled, input[type="submit"]:disabled,
		input[type="reset"].disabled,
		input[type="reset"]:disabled,
		input[type="button"].disabled,
		input[type="button"]:disabled,
		.button.disabled,
		.button:disabled {
			background-color: #888 !important;
			box-shadow: inset 0 -0.15em 0 0 rgba(0, 0, 0, 0.15);
			color: #fff !important;
			cursor: default;
			opacity: 0.25;
		}

/* Features */

	.features article {
		border-top: solid 3px #f4f4f4;
		margin-bottom: 2.25em;
		padding-top: 2.25em;
	}

		.features article:first-child {
			border-top: 0;
			padding-top: 0;
		}

		.features article .image {
			display: inline-block;
			padding-right: 2.5em;
			vertical-align: middle;
			width: 48%;
		}

			.features article .image img {
				display: block;
				width: 100%;
			}

		.features article .inner {
			display: inline-block;
			vertical-align: middle;
			width: 50%;
		}

			.features article .inner > :last-child {
				margin-bottom: 0;
			}

/* Header */

	#header {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-direction: column;
		-webkit-flex-direction: column;
		-ms-flex-direction: column;
		flex-direction: column;
		-moz-justify-content: space-between;
		-webkit-justify-content: space-between;
		-ms-justify-content: space-between;
		justify-content: space-between;
		background: #f44236;
		color: #d2f2e9;
		height: 100%;
		overflow-y: auto;
		position: fixed;
		text-align: center;
		top: 0;
		width: 23em;
		right: 0;
	}

		#header h1, #header h2, #header h3, #header h4, #header h5, #header h6 {
			color: #ffffff;
		}

			#header h1 a, #header h2 a, #header h3 a, #header h4 a, #header h5 a, #header h6 a {
				color: #ffffff;
			}

		#header header p {
			color: #b7eadc;
		}

		#header a {
			color: #d2f2e9;
		}

			#header a:hover {
				color: #ffffff !important;
			}

		#header > header {
			-moz-flex-shrink: 0;
			-webkit-flex-shrink: 0;
			-ms-flex-shrink: 0;
			flex-shrink: 0;
			padding: 3em;
		}

			#header > header .avatar {
				display: block;
				margin: 0 auto 2.25em auto;
				width: 8em;
			}

			#header > header h1 {
				font-size: 1.75em;
				margin: 0;
			}

			#header > header p {
				color: #d2f2e9;
				font-style: italic;
				margin: 1em 0 0 0;
			}

		#header > footer {
			-moz-flex-shrink: 0;
			-webkit-flex-shrink: 0;
			-ms-flex-shrink: 0;
			flex-shrink: 0;
			bottom: 0;
			left: 0;
			padding: 2em;
			width: 100%;
		}

			#header > footer .icons {
				margin: 0;
			}

				#header > footer .icons li a {
					color: #b7eadc;
				}

		#header > nav {
			-moz-flex-grow: 1;
			-webkit-flex-grow: 1;
			-ms-flex-grow: 1;
			flex-grow: 1;
		}

			#header > nav ul {
				list-style: none;
				margin: 0;
				padding: 0;
			}

				#header > nav ul li {
					border-top: solid 2px #5ccfb1;
					display: block;
					padding: 0;
				}

					#header > nav ul li a {
						-moz-transition: none;
						-webkit-transition: none;
						-ms-transition: none;
						transition: none;
						border: 0;
						color: #ffffff !important;
						display: block;
						padding: 0.85em 0;
						text-decoration: none;
					}

						#header > nav ul li a.active {
							background: #fff;
							color: #f44236 !important;
						}

					#header > nav ul li:first-child {
						border-top: 0;
					}

/* Wrapper */

	#wrapper {
		background: #fff;
		padding-right: 23em;
	}

/* Main */

	#main > section {
		border-top: solid 6px #f4f4f4;
	}

		#main > section > .container {
			padding: 6em 0 4em 0;
		}

		#main > section:first-child {
			border-top: 0;
		}

/* Footer */

	#footer {
		background: #fafafa;
		border-top: 0;
		color: #c0c0c0;
		overflow: hidden;
		padding: 4em 0 2em 0;
	}

		#footer .copyright {
			line-height: 1em;
			list-style: none;
			padding: 0;
		}

			#footer .copyright li {
				border-left: solid 1px #d4d4d4;
				display: inline-block;
				font-size: 0.8em;
				margin-left: 1em;
				padding-left: 1em;
			}

				#footer .copyright li:first-child {
					border-left: 0;
					margin-left: 0;
					padding-left: 0;
				}

				#footer .copyright li a {
					color: inherit;
				}

/* XLarge */

	@media screen and (max-width: 1680px) {

		/* Basic */

			body, input, select, textarea {
				font-size: 13pt;
			}

		/* Header */

			#header {
				width: 21em;
			}

				#header > header {
					padding: 2em;
				}

				#header > footer {
					padding: 1.5em;
				}

		/* Wrapper */

			#wrapper {
				padding-right: 21em;
			}

		/* Main */

			#main > section > .container {
				padding: 4em 0 2em 0;
			}

	}

/* Large */

	@media screen and (max-width: 1280px) {

		/* Basic */

			body, input, select, textarea {
				font-size: 11pt;
			}

		/* Header */

			#header {
				width: 20em;
			}

		/* Wrapper */

			#wrapper {
				padding-right: 20em;
			}

	}

/* Medium */

	#titleBar {
		display: none;
	}

	@media screen and (max-width: 1024px) {

		/* Basic */

			html, body {
				overflow-x: hidden;
			}

			body, input, select, textarea {
				font-size: 12pt;
			}

		/* Image */

			.image.left, .image.right {
				max-width: 40%;
			}

				.image.left img, .image.right img {
					width: 100%;
				}

			.image.main {
				height: 20em;
			}

		/* Header */

			#header {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				display: block;
				height: 100%;
				overflow-y: auto;
				position: fixed;
				top: 0;
				width: 23em;
				z-index: 10002;
				-moz-transform: translateX(23em);
				-webkit-transform: translateX(23em);
				-ms-transform: translateX(23em);
				transform: translateX(23em);
				right: 0;
			}

				#header > footer {
					bottom: auto;
					left: auto;
					margin: 0.5em 0 0 0;
					position: relative;
					right: auto;
					top: auto;
				}

		/* Wrapper */

			#wrapper {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				padding: 44px 0 1px 0;
			}

		/* Header Panel */

			#titleBar {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				display: block;
				height: 44px;
				left: 0;
				position: fixed;
				top: 0;
				width: 100%;
				z-index: 10001;
				background: #222;
				color: #fff;
				min-width: 320px;
			}

				#titleBar .title {
					color: #fff;
					display: block;
					font-weight: 700;
					height: 44px;
					line-height: 44px;
					padding: 0 1em;
					width: 100%;
					text-align: left;
				}

					#titleBar .title a {
						border: 0;
						text-decoration: none;
					}

				#titleBar .toggle {
					text-decoration: none;
					height: 4em;
					position: absolute;
					top: 0;
					width: 6em;
					border: 0;
					outline: 0;
					right: 0;
				}

					#titleBar .toggle:before {
						-moz-osx-font-smoothing: grayscale;
						-webkit-font-smoothing: antialiased;
						display: inline-block;
						font-style: normal;
						font-variant: normal;
						text-rendering: auto;
						line-height: 1;
						text-transform: none !important;
						font-family: 'Font Awesome 5 Free';
						font-weight: 900;
					}

					#titleBar .toggle:before {
						background: #f44236;
						color: #ffffff;
						content: '\f0c9';
						display: block;
						font-size: 18px;
						height: 44px;
						line-height: 44px;
						position: absolute;
						text-align: center;
						top: 0;
						width: 64px;
						right: 0;
					}

			body.header-visible #wrapper, body.header-visible #titleBar {
				-moz-transform: translateX(-23em);
				-webkit-transform: translateX(-23em);
				-ms-transform: translateX(-23em);
				transform: translateX(-23em);
			}

			body.header-visible #header {
				-moz-transform: translateX(0);
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

	}

/* Small */

	@media screen and (max-width: 736px) {

		/* Basic */

			body, input, select, textarea {
				font-size: 12pt;
			}

			h1 br, h2 br, h3 br, h4 br, h5 br, h6 br {
				display: none;
			}

			h2 {
				font-size: 1.75em;
			}

			h3 {
				font-size: 1.5em;
			}

			h4 {
				font-size: 1em;
			}

		/* Image */

			.image.left {
				margin: 0 1.5em 1em 0;
			}

			.image.right {
				margin: 0 0 1em 1.5em;
			}

			.image.main {
				height: 12em;
			}

		/* Section/Article */

			header br {
				display: none;
			}

			header.major h2 {
				font-size: 2.5em;
			}

				header.major h2 + p {
					font-size: 1.5em;
				}

		/* Features */

			.features article .image {
				display: block;
				margin: 0 0 2.25em 0;
				padding-right: 0;
				width: 100%;
			}

			.features article .inner {
				display: block;
				width: 100%;
			}

		/* Header */

			#header {
				width: 17em;
				-moz-transform: translateX(17em);
				-webkit-transform: translateX(17em);
				-ms-transform: translateX(17em);
				transform: translateX(17em);
				right: 0;
			}

				#header > header {
					padding: 2em;
				}

					#header > header .avatar {
						margin: 0 auto 1.6875em auto;
						width: 6em;
					}

					#header > header h1 {
						font-size: 1.5em;
					}

					#header > header p {
						margin: 1em 0 0 0;
					}

				#header > footer {
					padding: 1.5em;
				}

		/* Main */

			#main > section > .container {
				padding: 2em 0 0 0;
			}

		/* Footer */

			#footer {
				text-align: center;
			}

				#footer .copyright li {
					border-left: 0;
					display: block;
					line-height: 1.75em;
					margin: 0.75em 0 0 0;
					padding-left: 0;
				}

					#footer .copyright li:first-child {
						margin-top: 0;
					}

		/* Header Panel */

			#titleBar .toggle {
				height: 4em;
				width: 6em;
			}

				#titleBar .toggle:before {
					font-size: 14px;
					width: 44px;
				}

			body.header-visible #wrapper, body.header-visible #titleBar {
				-moz-transform: translateX(-17em);
				-webkit-transform: translateX(-17em);
				-ms-transform: translateX(-17em);
				transform: translateX(-17em);
			}

	}

/* XSmall */

	@media screen and (max-width: 480px) {

		/* Basic */

			html, body {
				min-width: 320px;
			}

			body, input, select, textarea {
				font-size: 12pt;
			}

		/* List */

			ul.actions {
				margin: 0 0 2.25em 0;
			}

				ul.actions li {
					display: block;
					padding: 1.125em 0 0 0;
					text-align: center;
					width: 100%;
				}

					ul.actions li:first-child {
						padding-top: 0;
					}

					ul.actions li > * {
						width: 100%;
						margin: 0 !important;
					}

						ul.actions li > *.icon:before {
							margin-left: -2em;
						}

				ul.actions.small li {
					padding: 0.5625em 0 0 0;
				}

					ul.actions.small li:first-child {
						padding-top: 0;
					}

			ul.feature-icons li {
				display: block;
				width: 100%;
			}

		/* Button */

			input[type="submit"],
			input[type="reset"],
			input[type="button"],
			.button {
				padding: 0;
			}

	}
</style>

	<body class="is-preload"> 

		<!-- Header -->
			<section id="header">
				<header>
					<span class="image avatar"><img src="images/avatar.jpg" alt="" /></span>
					<h1 id="logo"><a href="#">ADMIN</a></h1>
					<p>HE GOT ALL <br />
					PERMISSIONS</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">About</a></li>
						<li><a href="#two">Things I Can Do</a></li>
						<li><a href="#three">A Few Accomplishments</a></li>
            <!-- <li><a href="#four">Contact</a></li> -->
            <li><a href="/welcome">HOME</a></li>
            
           
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="image main" data-position="center">
									<img src="images/banner.jpg" alt="" />
								</div>
								<div class="container">
									<header class="major">
										<h2>Read Only VIEWS</h2>
										<p>Just an incredibly simple responsive site<br />
										template freebie by <a href="http://html5up.net">HTML5 UP</a>.</p>
									</header>
									<p>Faucibus sed lobortis aliquam lorem blandit. Lorem eu nunc metus col. Commodo id in arcu ante lorem ipsum sed accumsan erat praesent faucibus commodo ac mi lacus. Adipiscing mi ac commodo. Vis aliquet tortor ultricies non ante erat nunc integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum.</p>
								</div>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="container">
									<h3>Things I Can Do</h3>
									<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer lorem ipsum dolor sit amet.</p>
									<ul class="feature-icons">
										<li class="icon solid fa-code">Write all the code</li>
										<li class="icon solid fa-cubes">Stack small boxes</li>
										<li class="icon solid fa-book">Read books and stuff</li>
										<li class="icon solid fa-coffee">Drink much coffee</li>
										<li class="icon solid fa-bolt">Lightning bolt</li>
										<li class="icon solid fa-users">Shadow clone technique</li>
									</ul>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h3>A Few Accomplishments</h3>
									<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
									<div class="features">
										<article>
											<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
											<div class="inner">
												<h4>Possibly broke spacetime</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
											<div class="inner">
												<h4>Terraformed a small moon</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
											<div class="inner">
												<h4>Snapped dark matter in the wild</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
									</div>
                </div>
                <li><a href="/welcome">HOME</a></li>
							</section>

						<!-- Four -->
							<!-- <section id="four">
								<div class="container">
									<h3>Contact Me</h3>
									<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
									<form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" /></div>
											<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
											<div class="col-12"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
											<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" class="primary" value="Send Message" /></li>
													<li><input type="reset" value="Reset Form" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>
							</section> -->

						<!-- Five -->
						<!--
							<section id="five">
								<div class="container">
									<h3>Elements</h3>

									<section>
										<h4>Text</h4>
										<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
										This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
										This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
										<hr />
										<header>
											<h4>Heading with a Subtitle</h4>
											<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
										</header>
										<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
										<header>
											<h5>Heading with a Subtitle</h5>
											<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
										</header>
										<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
										<hr />
										<h2>Heading Level 2</h2>
										<h3>Heading Level 3</h3>
										<h4>Heading Level 4</h4>
										<h5>Heading Level 5</h5>
										<h6>Heading Level 6</h6>
										<hr />
										<h5>Blockquote</h5>
										<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
										<h5>Preformatted</h5>
										<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
									</section>

									<section>
										<h4>Lists</h4>
										<div class="row">
											<div class="col-6 col-12-xsmall">
												<h5>Unordered</h5>
												<ul>
													<li>Dolor pulvinar etiam magna etiam.</li>
													<li>Sagittis adipiscing lorem eleifend.</li>
													<li>Felis enim feugiat dolore viverra.</li>
												</ul>
												<h5>Alternate</h5>
												<ul class="alt">
													<li>Dolor pulvinar etiam magna etiam.</li>
													<li>Sagittis adipiscing lorem eleifend.</li>
													<li>Felis enim feugiat dolore viverra.</li>
												</ul>
											</div>
											<div class="col-6 col-12-xsmall">
												<h5>Ordered</h5>
												<ol>
													<li>Dolor pulvinar etiam magna etiam.</li>
													<li>Etiam vel felis at lorem sed viverra.</li>
													<li>Felis enim feugiat dolore viverra.</li>
													<li>Dolor pulvinar etiam magna etiam.</li>
													<li>Etiam vel felis at lorem sed viverra.</li>
													<li>Felis enim feugiat dolore viverra.</li>
												</ol>
												<h5>Icons</h5>
												<ul class="icons">
													<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
													<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
													<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
													<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
													<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
													<li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
												</ul>
											</div>
										</div>
										<h5>Actions</h5>
										<ul class="actions">
											<li><a href="#" class="button primary">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button alt">Default</a></li>
										</ul>
										<ul class="actions small">
											<li><a href="#" class="button primary small">Small</a></li>
											<li><a href="#" class="button small">Small</a></li>
											<li><a href="#" class="button alt small">Small</a></li>
										</ul>
										<div class="row">
											<div class="col-3 col-6-medium col-12-xsmall">
												<ul class="actions stacked">
													<li><a href="#" class="button primary">Default</a></li>
													<li><a href="#" class="button">Default</a></li>
													<li><a href="#" class="button alt">Default</a></li>
												</ul>
											</div>
											<div class="col-3 col-6 col-12-xsmall">
												<ul class="actions stacked">
													<li><a href="#" class="button primary small">Small</a></li>
													<li><a href="#" class="button small">Small</a></li>
													<li><a href="#" class="button alt small">Small</a></li>
												</ul>
											</div>
											<div class="col-3 col-6-medium col-12-xsmall">
												<ul class="actions stacked">
													<li><a href="#" class="button primary fit">Default</a></li>
													<li><a href="#" class="button fit">Default</a></li>
													<li><a href="#" class="button alt fit">Default</a></li>
												</ul>
											</div>
											<div class="col-3 col-6-medium col-12-xsmall">
												<ul class="actions stacked">
													<li><a href="#" class="button primary small fit">Small</a></li>
													<li><a href="#" class="button small fit">Small</a></li>
													<li><a href="#" class="button alt small fit">Small</a></li>
												</ul>
											</div>
										</div>
									</section>

									<section>
										<h4>Table</h4>
										<h5>Default</h5>
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Item One</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Two</td>
														<td>Vis ac commodo adipiscing arcu aliquet.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Three</td>
														<td> Morbi faucibus arcu accumsan lorem.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Four</td>
														<td>Vitae integer tempus condimentum.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Five</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
										</div>

										<h5>Alternate</h5>
										<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Item One</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Two</td>
														<td>Vis ac commodo adipiscing arcu aliquet.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Three</td>
														<td> Morbi faucibus arcu accumsan lorem.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Four</td>
														<td>Vitae integer tempus condimentum.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Five</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</section>

									<section>
										<h4>Buttons</h4>
										<ul class="actions">
											<li><a href="#" class="button primary">Primary</a></li>
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button alt">Alternate</a></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button primary large">Large</a></li>
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button alt small">Small</a></li>
										</ul>
										<ul class="actions fit">
											<li><a href="#" class="button primary fit">Fit</a></li>
											<li><a href="#" class="button fit">Fit</a></li>
											<li><a href="#" class="button alt fit">Fit</a></li>
										</ul>
										<ul class="actions fit small">
											<li><a href="#" class="button primary fit small">Fit + Small</a></li>
											<li><a href="#" class="button fit small">Fit + Small</a></li>
											<li><a href="#" class="button alt fit small">Fit + Small</a></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
											<li><a href="#" class="button icon solid fa-download">Icon</a></li>
											<li><a href="#" class="button alt icon solid fa-check">Icon</a></li>
										</ul>
										<ul class="actions">
											<li><span class="button primary disabled">Primary</span></li>
											<li><span class="button disabled">Default</span></li>
											<li><span class="button alt disabled">Alternate</span></li>
										</ul>
									</section>

									<section>
										<h4>Form</h4>
										<form method="post" action="#">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
												</div>
												<div class="col-12">
													<select name="demo-category" id="demo-category">
														<option value="">- Category -</option>
														<option value="1">Manufacturing</option>
														<option value="1">Shipping</option>
														<option value="1">Administration</option>
														<option value="1">Human Resources</option>
													</select>
												</div>
												<div class="col-4 col-12-medium">
													<input type="radio" id="demo-priority-low" name="demo-priority" checked>
													<label for="demo-priority-low">Low Priority</label>
												</div>
												<div class="col-4 col-12-medium">
													<input type="radio" id="demo-priority-normal" name="demo-priority">
													<label for="demo-priority-normal">Normal Priority</label>
												</div>
												<div class="col-4 col-12-medium">
													<input type="radio" id="demo-priority-high" name="demo-priority">
													<label for="demo-priority-high">High Priority</label>
												</div>
												<div class="col-6 col-12-medium">
													<input type="checkbox" id="demo-copy" name="demo-copy">
													<label for="demo-copy">Email me a copy of this message</label>
												</div>
												<div class="col-6 col-12-medium">
													<input type="checkbox" id="demo-human" name="demo-human" checked>
													<label for="demo-human">I am a human and not a robot</label>
												</div>
												<div class="col-12">
													<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
												</div>
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" value="Send Message" /></li>
														<li><input type="reset" value="Reset" class="alt" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

									<section>
										<h4>Image</h4>
										<h5>Fit</h5>
										<span class="image fit"><img src="images/banner.jpg" alt="" /></span>
										<div class="box alt">
											<div class="row gtr-50 gtr-uniform">
												<div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
												<div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
												<div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
												<div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
												<div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
												<div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
												<div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
												<div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
												<div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
											</div>
										</div>
										<h5>Left &amp; Right</h5>
										<p><span class="image left"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
										<p><span class="image right"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
									</section>

								</div>
							</section>
						-->

					</div>

				<!-- Footer -->
					<!-- <section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>

			</div> -->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>