<template>
  <div>
    <Navbar />
      <v-container>
          <v-row>
            <v-col class="d-flex flex-column justify-center" md="4" >
                <div>
                    <v-img src="https://iili.io/FKaZNf.png" w-100></v-img>

                    <v-container fluid style="margin-top: 25%;">
                        
                        <span style="font-size: 18px">
                            “Everybody in this country should learn to program a computer, because it teaches you how to think..” Steve Jobs
                        </span>

                        <v-btn
                        rounded
                        color="#1B4188"
                        dark
                        block
                        class="mt-5"
                        to="/ulazni_kviz"
                        >
                            Uradi kviz
                        </v-btn>
                    </v-container>
                </div>
            </v-col> 
            <v-col md="8">
              <svg w-100 viewBox="0 0 1042 555" fill="none" xmlns="http://www.w3.org/2000/svg" id="landing-image">
              <g id="programmer_landing" clip-path="url(#clip0)">
              <path id="Vector" d="M961.48 438.21C960.32 440.71 959.163 443.177 958.01 445.61C956.21 449.39 954.433 453.097 952.68 456.73C951.9 458.34 951.12 459.92 950.36 461.5C941.76 479.07 933.73 494.61 926.91 507.39C920.722 518.97 911.533 528.672 900.306 535.481C889.08 542.29 876.229 545.954 863.1 546.09L711.45 547.74H709.85L696.85 547.88L685.73 548L651.63 548.37H650.25L632.89 548.56H632.36L525.36 549.72L429.85 550.72L418.74 550.84L349.74 551.59H349.66L304.91 552.07H304.43L162.93 553.6L120.6 554.06C116.996 554.101 113.392 553.921 109.81 553.52V553.52C108.59 553.38 107.37 553.22 106.16 553.03C86.418 549.983 68.3161 540.263 54.87 525.49C36.66 505.46 23.41 482.09 14.51 456.73C13.2233 453.07 12.0233 449.363 10.91 445.61C-19.9 341.46 17.66 207.09 85.26 117.17C88.0933 113.41 90.9733 109.743 93.9 106.17L93.97 106.09C114.76 80.57 138.07 59.25 162.9 44.09C206.9 17.18 255.65 9.60001 303.6 32.19C344.17 51.31 382.05 60.3 418.77 62.74C422.48 62.98 426.19 63.16 429.88 63.27C514.11 65.92 593.05 35.57 685.75 15.98C689.44 15.2 693.14 14.43 696.87 13.7C763 0.540001 836.36 -6.39999 923.6 8.19001C932.664 9.67067 941.607 11.8097 950.36 14.59C954.207 15.83 957.913 17.1633 961.48 18.59C1003.12 35.53 1025.83 66.83 1035.48 106.05C1036.39 109.69 1037.18 113.393 1037.85 117.16C1054.96 211.5 1004.85 345.32 961.48 438.21Z" fill="#F2F2F2"/>
              <path id="Vector_2" opacity="0.1" d="M497.02 445.61C496.617 449.35 495.992 453.064 495.15 456.73H588.85V445.61H497.02ZM418.77 508.42L429.88 508.33V480.86C426.07 480.69 422.36 480.52 418.77 480.34V508.42ZM185.85 445.61V456.73H384.35V445.61H185.85ZM1035.53 106.09H961.53V18.6C957.963 17.1533 954.257 15.82 950.41 14.6V106.09H696.87V13.67C693.14 14.4 689.44 15.17 685.75 15.95V106.09H429.88V63.24C426.19 63.13 422.48 62.95 418.77 62.71V106.09H162.9V44.09C138.07 59.25 114.76 80.57 93.97 106.09H93.9V106.17C90.9667 109.77 88.0867 113.437 85.26 117.17H93.9V445.61H10.9C12.0067 449.363 13.2067 453.07 14.5 456.73H93.89V550.35C97.8844 551.572 101.962 552.504 106.09 553.14C107.3 553.33 108.52 553.49 109.74 553.63C113.322 554.031 116.926 554.211 120.53 554.17L162.86 553.71V456.71H418.77V550.92L429.88 550.8V456.73H685.75V548.09L696.87 547.97V456.73H950.36V461.5C951.12 459.92 951.9 458.34 952.68 456.73C954.433 453.097 956.21 449.39 958.01 445.61C959.163 443.183 960.32 440.717 961.48 438.21V117.21H1037.9C1037.23 113.417 1036.44 109.71 1035.53 106.09ZM162.9 445.61V117.17H418.77V445.61H162.9ZM429.9 445.61V117.17H685.75V445.61H429.9ZM950.38 445.61H696.87V117.17H950.36L950.38 445.61Z" fill="black"/>
              <path id="Vector_3" d="M863.09 533.65V546.65L711.17 548.05L709.55 548.08L651.81 548.61L650.43 548.63L632.88 548.78H632.36L525.38 549.77L349.77 551.4H349.62L304.97 551.82L304.49 551.83L106.09 553.65V538.65L152.74 510.65L246.34 509.87L248.34 509.86L249 509.85L251 509.82L295.94 509.45L297.95 509.44L298.59 509.43L300.59 509.42L315 509.3L315.38 509.29L350.93 508.99H351.22L628.62 506.65L635.41 506.6H636.09L641.27 506.55L678.92 506.24L680.92 506.21L682.77 506.19H683.73L695.44 506.1L697.76 506.07L700.87 506.05L710.62 505.96L726.09 505.83L728.09 505.81L731.57 505.79H732.22L806.93 505.15L863.09 533.65Z" fill="#65617D"/>
              <path id="Vector_4" opacity="0.2" d="M863.09 533.65V546.65L711.17 548.05L709.55 548.08L651.81 548.61L650.43 548.63L632.88 548.78H632.36L525.38 549.77L349.77 551.4H349.62L304.97 551.82L304.49 551.83L106.09 553.65V538.65L152.74 510.65L246.34 509.87L248.34 509.86L249 509.85L251 509.82L295.94 509.45L297.95 509.44L298.59 509.43L300.59 509.42L315 509.3L315.38 509.29L350.93 508.99H351.22L628.62 506.65L635.41 506.6H636.09L641.27 506.55L678.92 506.24L680.92 506.21L682.77 506.19H683.73L695.44 506.1L697.76 506.07L700.87 506.05L710.62 505.96L726.09 505.83L728.09 505.81L731.57 505.79H732.22L806.93 505.15L863.09 533.65Z" fill="black"/>
              <path id="Vector_5" d="M296.1 483.66V508.15C296.101 509.31 295.772 510.446 295.152 511.427C294.533 512.408 293.648 513.192 292.6 513.69C291.82 514.068 290.967 514.273 290.1 514.29L255.2 515.03C254.268 515.052 253.343 514.857 252.5 514.46C251.434 513.971 250.53 513.186 249.897 512.199C249.265 511.211 248.929 510.063 248.93 508.89V483.66H296.1Z" fill="#3F3D56"/>
              <path id="Vector_6" opacity="0.1" d="M296.1 483.66V508.15C296.101 509.31 295.772 510.446 295.152 511.427C294.533 512.408 293.648 513.192 292.6 513.69C291.82 514.068 290.967 514.273 290.1 514.29L255.2 515.03C254.268 515.052 253.343 514.857 252.5 514.46C251.434 513.971 250.53 513.186 249.897 512.199C249.265 511.211 248.929 510.063 248.93 508.89V483.66H296.1Z" fill="black"/>
              <path id="Vector_7" d="M298.1 483.66V508.15C298.101 509.31 297.772 510.446 297.152 511.427C296.533 512.408 295.648 513.192 294.6 513.69C293.82 514.068 292.967 514.273 292.1 514.29L257.2 515.03C256.268 515.052 255.343 514.857 254.5 514.46C253.434 513.971 252.53 513.186 251.897 512.199C251.265 511.211 250.929 510.063 250.93 508.89V483.66H298.1Z" fill="#3F3D56"/>
              <path id="Vector_8" d="M728.09 483.65H680.92V515.15H728.09V483.65Z" fill="#3F3D56"/>
              <path id="Vector_9" opacity="0.1" d="M728.09 483.65H680.92V515.15H728.09V483.65Z" fill="black"/>
              <path id="Vector_10" d="M726.09 483.65H678.92V515.15H726.09V483.65Z" fill="#3F3D56"/>
              <path id="Vector_11" opacity="0.1" d="M298.09 483.65V488.62L250.92 489.88V483.65H298.09Z" fill="black"/>
              <path id="Vector_12" d="M381.35 312.36V480.56C381.338 481.587 380.931 482.569 380.215 483.305C379.498 484.04 378.526 484.472 377.5 484.51L185.85 489.61H185.8C184.756 489.597 183.759 489.177 183.021 488.439C182.283 487.701 181.863 486.704 181.85 485.66V312.36C181.863 311.316 182.283 310.319 183.021 309.581C183.759 308.843 184.756 308.423 185.8 308.41H377.4C378.444 308.423 379.441 308.843 380.179 309.581C380.917 310.319 381.337 311.316 381.35 312.36V312.36Z" fill="#65617D"/>
              <path id="Vector_13" opacity="0.1" d="M185.85 308.41V489.61H185.8C184.756 489.597 183.759 489.177 183.021 488.439C182.283 487.701 181.863 486.704 181.85 485.66V312.36C181.863 311.316 182.283 310.319 183.021 309.581C183.759 308.843 184.756 308.423 185.8 308.41H185.85Z" fill="black"/>
              <path id="Vector_14" d="M194.59 319.15H372.09V467.4L194.59 471.4V319.15Z" fill="#1B4188"/>
              <path id="Line7" d="M222.881 389H199.119C199.088 389 199.057 388.947 199.035 388.854C199.013 388.76 199 388.633 199 388.5C199 388.367 199.013 388.24 199.035 388.146C199.057 388.053 199.088 388 199.119 388H222.881C222.912 388 222.943 388.053 222.965 388.146C222.987 388.24 223 388.367 223 388.5C223 388.633 222.987 388.76 222.965 388.854C222.943 388.947 222.912 389 222.881 389Z" fill="#F2F2F2"/>
              <path id="Line4" d="M299.1 361H199.5C199.367 361 199.24 360.947 199.146 360.854C199.053 360.76 199 360.633 199 360.5C199 360.367 199.053 360.24 199.146 360.146C199.24 360.053 199.367 360 199.5 360H299.1C299.233 360 299.36 360.053 299.454 360.146C299.547 360.24 299.6 360.367 299.6 360.5C299.6 360.633 299.547 360.76 299.454 360.854C299.36 360.947 299.233 361 299.1 361Z" fill="#F2F2F2"/>
              <path id="Line5" d="M256.717 371H200.283C200.208 371 200.136 370.947 200.083 370.854C200.03 370.76 200 370.633 200 370.5C200 370.367 200.03 370.24 200.083 370.146C200.136 370.053 200.208 370 200.283 370H256.717C256.792 370 256.864 370.053 256.917 370.146C256.97 370.24 257 370.367 257 370.5C257 370.633 256.97 370.76 256.917 370.854C256.864 370.947 256.792 371 256.717 371Z" fill="#F2F2F2"/>
              <path id="Line6" d="M256.717 380H200.283C200.208 380 200.136 379.947 200.083 379.854C200.03 379.76 200 379.633 200 379.5C200 379.367 200.03 379.24 200.083 379.146C200.136 379.053 200.208 379 200.283 379H256.717C256.792 379 256.864 379.053 256.917 379.146C256.97 379.24 257 379.367 257 379.5C257 379.633 256.97 379.76 256.917 379.854C256.864 379.947 256.792 380 256.717 380Z" fill="#F2F2F2"/>
              <path id="Vector_15" opacity="0.1" d="M726.09 483.65V490.06L678.92 488.8V483.65H726.09Z" fill="black"/>
              <path id="Vector_16" d="M788.35 312.36V485.66C788.337 486.712 787.91 487.717 787.161 488.456C786.412 489.196 785.402 489.61 784.35 489.61V489.61L592.66 484.51C591.634 484.472 590.662 484.04 589.945 483.305C589.229 482.569 588.822 481.587 588.81 480.56V312.36C588.823 311.316 589.243 310.319 589.981 309.581C590.719 308.843 591.716 308.423 592.76 308.41H784.36C785.411 308.413 786.418 308.828 787.164 309.567C787.911 310.306 788.337 311.31 788.35 312.36V312.36Z" fill="#65617D"/>
              <path id="Vector_17" opacity="0.1" d="M788.35 312.36V485.66C788.337 486.712 787.91 487.717 787.161 488.456C786.412 489.196 785.402 489.61 784.35 489.61V489.61V308.41C785.402 308.41 786.412 308.824 787.161 309.564C787.91 310.303 788.337 311.308 788.35 312.36Z" fill="black"/>
              <path id="Vector_18" d="M775.59 319.15H598.09V467.4L775.59 471.4V319.15Z" fill="#1B4188"/>
              <path id="Vector_19" d="M583.85 312.36V480.56C583.838 481.587 583.431 482.569 582.715 483.305C581.998 484.04 581.026 484.472 580 484.51L388.35 489.61C387.298 489.61 386.288 489.196 385.539 488.456C384.79 487.717 384.363 486.712 384.35 485.66V312.36C384.363 311.316 384.783 310.319 385.521 309.581C386.259 308.843 387.256 308.423 388.3 308.41H579.9C580.944 308.423 581.941 308.843 582.679 309.581C583.417 310.319 583.837 311.316 583.85 312.36V312.36Z" fill="#65617D"/>
              <path id="Vector_20" d="M397.09 319.15H574.59V467.4L397.09 471.4V319.15Z" fill="#1B4188"/>
              <path id="Vector_21" opacity="0.1" d="M863.09 533.65V546.65L711.17 548.05L709.55 548.08L651.81 548.61L650.43 548.63L632.88 548.78H632.36L525.38 549.77L349.77 551.4H349.62L304.97 551.82L304.49 551.83L106.09 553.65V538.65L308.6 537.32H309.08L350.07 537.04H350.26L633.34 535.17H633.63L633.8 535.16H634.27L639.06 535.13H640.52L715.01 534.63L719.41 534.61L720.39 534.6L863.09 533.65Z" fill="black"/>
              <path id="Vector_22" d="M487.26 349.48C515.609 349.48 538.59 326.499 538.59 298.15C538.59 269.801 515.609 246.82 487.26 246.82C458.911 246.82 435.93 269.801 435.93 298.15C435.93 326.499 458.911 349.48 487.26 349.48Z" fill="#FBBEBE"/>
              <path id="Vector_23" d="M538.6 377.16C538.6 377.16 439.1 389.16 448.6 377.16C452.04 372.82 452.99 359.96 452.8 345.31C452.74 340.86 452.58 336.25 452.35 331.66C451.25 309.66 448.6 288.16 448.6 288.16C448.6 288.16 535.6 247.16 525.6 279.66C521.6 292.79 522.91 311.23 525.95 328.54C526.84 333.59 527.87 338.54 528.95 343.24C531.586 354.704 534.807 366.025 538.6 377.16V377.16Z" fill="#FBBEBE"/>
              <path id="Vector_24" d="M506.13 373.09C517.64 370.96 529.83 367.09 540.66 371.55C543.51 372.72 546.13 374.43 549.05 375.41C551.97 376.39 555.17 376.63 558.21 377.32C568.89 379.74 577.55 387.87 583.11 397.32C588.67 406.77 591.55 417.46 594.37 428.04L601.27 453.87C607.27 476.32 613.27 498.96 614.66 522.17C531.127 526.951 447.402 527.429 363.82 523.6C369.26 513.26 374.82 502.29 374.36 490.6C373.9 478.91 367.17 467.38 369.6 455.86C371.15 448.52 376.17 442.47 379.24 435.64C387.99 416.12 381.18 389.85 396.56 374.99C403.48 368.31 413.56 365.78 423.19 366.1C435.47 366.51 448.04 370.34 460.19 372.21C475.75 374.57 490.45 375.97 506.13 373.09Z" fill="#FF6584"/>
              <path id="Vector_25" opacity="0.1" d="M637.03 484.26L636.93 485.69V485.79L636.76 488.09L635.43 506.6L633.82 528.9L633.36 535.18L632.36 548.62V548.79L525.36 549.79L349.77 551.69V552.53H349.63V551.69V551.41L350.08 537.05L350.94 508.99L351.68 485.2L351.75 482.83C351.794 481.4 352.129 479.993 352.734 478.696C353.34 477.4 354.203 476.24 355.272 475.288C356.341 474.336 357.592 473.612 358.95 473.161C360.308 472.709 361.744 472.538 363.17 472.66C367.89 473.06 374.02 473.55 381.35 474.07L384.35 474.29C426.68 477.23 504.91 481.03 583.85 476.29C585.51 476.2 587.18 476.1 588.85 475.98C601.09 475.21 613.32 474.22 625.43 472.98C626.961 472.82 628.508 472.997 629.963 473.499C631.418 474.001 632.746 474.817 633.851 475.887C634.957 476.958 635.815 478.258 636.364 479.696C636.913 481.134 637.141 482.675 637.03 484.21V484.26Z" fill="black"/>
              <path id="Vector_26" d="M349.74 552.53V551.69L525.36 549.78L632.36 548.78H632.66V548.61L633.66 535.17L634.09 529.17L635.73 506.56L637.02 488.66V488.22C637.08 487.395 637.043 486.566 636.91 485.75C636.916 485.717 636.916 485.683 636.91 485.65C636.635 483.962 635.948 482.369 634.91 481.01C633.809 479.598 632.366 478.49 630.718 477.79C629.07 477.09 627.271 476.822 625.49 477.01C613.38 478.25 601.15 479.24 588.91 480.01C587.24 480.13 585.57 480.23 583.91 480.32C504.97 485.01 426.74 481.21 384.41 478.32L381.41 478.1C374.08 477.58 367.95 477.1 363.23 476.69C360.633 476.471 358.048 477.221 355.972 478.797C353.896 480.372 352.478 482.66 351.99 485.22C351.889 485.761 351.829 486.31 351.81 486.86L351.13 509.02L350.2 537.09L349.76 551.45V551.73V552.57L349.74 552.53Z" fill="#3F3D56"/>
              <path id="Vector_27" opacity="0.1" d="M637.33 491.27L636.1 506.6L634.27 529.45L633.81 535.17L632.81 547.98L632.75 548.62V548.79L632.6 550.27L632.71 548.79H632.42L525.42 549.79L349.77 551.69V551.41L350.26 537.05L351.26 508.99L351.9 490.34C351.931 489.279 352.228 488.243 352.762 487.326C353.297 486.409 354.052 485.64 354.96 485.09C356.092 484.396 357.416 484.081 358.74 484.19C360.84 484.36 363.42 484.56 366.43 484.78C371.32 485.14 377.35 485.56 384.37 486C397.37 486.82 413.68 487.7 432.37 488.42C484.37 490.42 554.57 491.09 621.25 485.25C624.25 484.99 627.35 484.7 630.38 484.41C631.579 484.29 632.788 484.52 633.86 485.07C634.164 485.221 634.452 485.402 634.72 485.61C635.591 486.241 636.28 487.089 636.72 488.07C636.822 488.265 636.906 488.469 636.97 488.68C637.27 489.509 637.393 490.391 637.33 491.27V491.27Z" fill="black"/>
              <path id="Vector_28" opacity="0.1" d="M298.1 504.96V508.15C298.101 509.31 297.772 510.446 297.152 511.427C296.533 512.408 295.648 513.192 294.6 513.69L254.5 514.46C253.434 513.971 252.53 513.186 251.897 512.199C251.265 511.211 250.929 510.063 250.93 508.89V505.89L298.1 504.96Z" fill="black"/>
              <path id="Vector_29" d="M298.59 515.57L246.34 516.57V507.9L298.59 506.9V515.57Z" fill="#3F3D56"/>
              <path id="Vector_30" opacity="0.1" d="M298.59 515.57L246.34 516.57V507.9L298.59 506.9V515.57Z" fill="black"/>
              <path id="Vector_31" d="M300.59 515.57L248.34 516.57V507.9L300.59 506.9V515.57Z" fill="#3F3D56"/>
              <path id="Vector_32" opacity="0.1" d="M679.22 506.96V510.15C679.219 511.31 679.548 512.446 680.168 513.427C680.787 514.408 681.672 515.192 682.72 515.69L722.82 516.46C723.886 515.971 724.79 515.186 725.422 514.199C726.055 513.211 726.391 512.063 726.39 510.89V507.89L679.22 506.96Z" fill="black"/>
              <path id="Vector_33" opacity="0.1" d="M678.72 517.57L730.97 518.57V509.9L678.72 508.9V517.57Z" fill="black"/>
              <path id="Vector_34" d="M676.72 517.57L728.97 518.57V509.9L676.72 508.9V517.57Z" fill="#3F3D56"/>
              <path id="Vector_35" d="M454.79 313.88C454.87 320.88 451.63 327.48 448.88 333.95C438.867 357.518 434.531 383.109 436.22 408.66C436.95 419.66 438.8 430.66 436.95 441.56C435.1 452.46 428.52 463.33 417.95 466.46C435.48 476.91 459.21 475.81 475.71 463.8C484.5 457.4 491.05 448.47 497.46 439.69C496.699 455.462 492.132 470.816 484.15 484.44C498.578 483.162 512.577 478.869 525.24 471.837C537.903 464.805 548.948 455.192 557.66 443.62C561.97 437.81 565.72 431.43 567.38 424.39C570.47 411.39 566.16 397.88 562.87 384.89C560.121 374.031 558.06 363.009 556.7 351.89C556.27 348.33 555.92 344.67 556.8 341.19C557.8 337.12 560.47 333.68 562.44 329.97C568.04 319.43 568.17 306.67 565.3 295.09C562.43 283.51 556.81 272.83 551.24 262.28C546.78 253.82 541.94 244.97 533.78 240C528.68 236.9 522.78 235.61 516.9 234.36L491.53 228.93C485.98 227.74 480.27 226.55 474.66 227.42C465.19 228.9 458.52 235.74 452.66 242.76C448.07 248.22 436.85 258.47 436.06 265.62C435.34 272.21 441.16 283.25 442.15 290.2C443.45 299.2 444.37 296.2 449.45 301.72C452.66 305.14 454.73 309.09 454.79 313.88Z" fill="#3F3D56"/>
              <path id="Line1" d="M300.26 333.59H200.66C200.527 333.59 200.4 333.537 200.306 333.444C200.213 333.35 200.16 333.223 200.16 333.09C200.16 332.957 200.213 332.83 200.306 332.736C200.4 332.643 200.527 332.59 200.66 332.59H300.26C300.393 332.59 300.52 332.643 300.614 332.736C300.707 332.83 300.76 332.957 300.76 333.09C300.76 333.223 300.707 333.35 300.614 333.444C300.52 333.537 300.393 333.59 300.26 333.59Z" fill="#F2F2F2"/>
              <path id="Line2" d="M300.26 342.59H200.66C200.527 342.59 200.4 342.537 200.306 342.444C200.213 342.35 200.16 342.223 200.16 342.09C200.16 341.957 200.213 341.83 200.306 341.736C200.4 341.643 200.527 341.59 200.66 341.59H300.26C300.393 341.59 300.52 341.643 300.614 341.736C300.707 341.83 300.76 341.957 300.76 342.09C300.76 342.223 300.707 342.35 300.614 342.444C300.52 342.537 300.393 342.59 300.26 342.59Z" fill="#F2F2F2"/>
              <path id="Line3" d="M300.26 351.59H200.66C200.527 351.59 200.4 351.537 200.306 351.444C200.213 351.35 200.16 351.223 200.16 351.09C200.16 350.957 200.213 350.83 200.306 350.736C200.4 350.643 200.527 350.59 200.66 350.59H300.26C300.393 350.59 300.52 350.643 300.614 350.736C300.707 350.83 300.76 350.957 300.76 351.09C300.76 351.223 300.707 351.35 300.614 351.444C300.52 351.537 300.393 351.59 300.26 351.59Z" fill="#F2F2F2"/>
              </g>
              <defs>
              <clipPath id="clip0">
              <rect width="1041.32" height="554.17" fill="white"/>
              </clipPath>
              </defs>
              </svg>

              </v-col> 
            </v-row>
        </v-container>

        <!--Što je CodeSUM?-->

        <v-container fluid>
          <v-container>

            <v-row align="center" justify="space-around">
              <h1 class="d-flex justify-center" style="color: #1B4188;">Što je CodeSUM?</h1>
            </v-row>

            <v-row align="center" justify="space-around" class="mt-5">
              <v-btn tile color="#1B4188" outlined>
                <v-icon left color="#1B4188">
                  mdi-play
                </v-icon>
                <span style="color: #1B4188;">
                  Pogledaj video
                </span>
                </v-btn>
            </v-row>
            
          </v-container>

          <!--Što je CodeSUM kartice-->
          <v-row class="mt-10">
            <v-col v-for="(item, index) in cards" :key="index" xs="12" sm="12" md="6">
              <v-hover v-slot:default="{ hover }" open-delay="200">
                <v-card
                  :elevation="hover ? 16 : 2"
                  :class="{ 'on-hover': hover }"
                  class="mx-auto"
                  max-width="400"
                >
                  <v-img
                    class="white--text align-end"
                    height="200px"
                    :src="item.image"
                  >
                  </v-img>

                  <v-card-subtitle class="pb-0">
                    {{ item.name }}
                  </v-card-subtitle>

                  <v-card-text class="text--primary">

                    <div>{{ item.description }}</div>
                  </v-card-text>

                  <v-card-actions class="d-flex justify-end p-3">
                    <v-dialog
                      v-model="item.dialog"
                      persistent
                      max-width="290"
                    >
                      <template v-slot:activator="{ on, attrs }">
                    <v-btn
                      color="#1B4188"
                      v-bind="attrs"
                      v-on="on"
                    >
                      Više
                    </v-btn>
                    </template>
                      <v-card>
                        <v-card-title class="headline">
                          {{ item.modal.name }}
                        </v-card-title>
                        <v-card-text>{{ item.modal.description }}</v-card-text>
                        <v-card-actions>
                          <v-spacer></v-spacer>
                          <v-btn
                            color="#1B4188"
                            @click="item.dialog = false"
                          >
                            Zatvori
                          </v-btn>
                        </v-card-actions>
                      </v-card>
                    </v-dialog>
                  </v-card-actions>
                </v-card>
              </v-hover>
            </v-col>
          </v-row>
        </v-container>

      <!--Sučelje za programiranje-->
        <v-container>
          <v-divider style="margin: 50px 0 50px 0"></v-divider>
            <v-hover v-slot:default="{ hover }" close-delay="80">
              <v-card shaped :elevation="hover ? 8 : 2" class="mb-12">
                <v-row align="center">
                  <v-col cols="md-5">
                    <v-card-text>
                      <p class="display-1 font-weight-medium" style="color: #1B4188;">Interaktivno sučelje za programiranje</p>
                      <div class="justify-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor molestie magna quis blandit.
                        Proin id lectus et leo vestibulum consequat. Vivamus ut libero vel felis vestibulum facilisis.
                        Nam velit tellus, sollicitudin et fermentum ac, efficitur quis mauris.
                        Nullam viverra sem varius ligula laoreet faucibus. Fusce ac malesuada felis. Integer ullamcorper dui ac justo malesuada sollicitudin. Nunc vitae egestas ante.
                        Aliquam faucibus nunc nec leo sollicitudin vehicula. Nulla volutpat in neque in vulputate.
                      </div>
                    </v-card-text>
                  </v-col>
                  <v-col cols="md-7">
                    <v-img src="https://iili.io/K3pBF2.png"></v-img>
                  </v-col>
                </v-row>
              </v-card>
            </v-hover>
          <v-divider style="margin: 50px 0 50px 0"></v-divider>
        </v-container>

        <!--Tehnologije-->

        <v-container>
            <v-hover v-slot:default="{ hover }" close-delay="80">
              <v-card shaped :elevation="hover ? 8 : 2" class="mb-12">
                <v-row align="center">
                  <v-col cols="md-7">
                    <v-img w-100 src="https://iili.io/K3pc8P.png"></v-img>
                  </v-col>
                  <v-col cols="md-5">
                    <v-card-text>
                      <p class="display-1 font-weight-medium" style="color: #1B4188;">Tehnologije korištene za izradu</p>
                      <div class="justify-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor molestie magna quis blandit.
                        Proin id lectus et leo vestibulum consequat. Vivamus ut libero vel felis vestibulum facilisis.
                        Nam velit tellus, sollicitudin et fermentum ac, efficitur quis mauris.
                        Nullam viverra sem varius ligula laoreet faucibus. Fusce ac malesuada felis. Integer ullamcorper dui ac justo malesuada sollicitudin. Nunc vitae egestas ante.
                        Aliquam faucibus nunc nec leo sollicitudin vehicula. Nulla volutpat in neque in vulputate.
                      </div>
                    </v-card-text>
                  </v-col>
                </v-row>
              </v-card>
            </v-hover>
          <v-divider style="margin: 50px 0 50px 0"></v-divider>
        </v-container>

        <!--Timeline-->

        <Timeline />

      <!--Kreatori-->

      <v-row>
        <v-col cols="12" md="6">

          <v-card
          class="mx-auto mt-10"
          max-width="344"
          outlined
        >
          <v-list-item three-line>
            <v-list-item-content>
              <div class="text-center avatar__card">
                <v-avatar
                  size="100"
                  color="black"
                >
                  <img
                    src="https://scontent-vie1-1.xx.fbcdn.net/v/t1.0-9/117708432_2620170331527891_5357806687406333131_o.jpg?_nc_cat=107&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeE6qfD5eJ989ugw2A1CFSBLXU-Ttsh4wOtdT5O2yHjA6--hMvVbyiw5U2Yc_m-nxpKUyEZ9oX9TV7ccSpuGeSta&_nc_ohc=HvieFYPLmvEAX8rFMLA&_nc_oc=AQk-IxRvNrHLyl7zHsr6FNFjynVusMo6Bu779AQGy9G19fCKcasIdFsnJQqzsE75wGc&_nc_ht=scontent-vie1-1.xx&oh=ea464f89de086cfdb6a4fbe1a9ccab94&oe=601EF527"
                    alt="Stanko Bebek"
                  >
                </v-avatar>
              </div>
              <div class="text-center">
                <v-list-item-title class="headline mb-1 mt-10">
                  Stanko Bebek
                </v-list-item-title>
                <div class="overline mb-4">
                  Informatika FPMOZ
                </div>
              </div>
              <p class="font-weight-light" style="line-height: 1.3" align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu lectus id massa ullamcorper faucibus. 
                Nulla nec vehicula nisi, eget auctor erat. Sed auctor facilisis ipsum et vestibulum. 
                Donec vitae nulla suscipit nisl tempus blandit ut eu nisi. Duis sed dui velit. 
                Sed dictum pretium enim, sit amet malesuada ex interdum sed. 
                Proin tortor dolor, vehicula quis nulla ac, volutpat tincidunt nunc.</p>
            </v-list-item-content>
          </v-list-item>

          <v-card-actions class="d-flex justify-space-between">
            <div>
              <v-btn
                color="black"
                fab
                dark
              >
                <v-icon>mdi-github</v-icon>
              </v-btn>
              <v-btn
                color="blue"
                fab
                dark
              >
                <v-icon>mdi-linkedin</v-icon>
              </v-btn>
            </div>

            <div class="text-right">
              <v-btn
                rounded
                color="#1B4188"
                dark
                to="/kreatori/stanko"
              >
                Više
              </v-btn>
            </div>
          </v-card-actions>
        </v-card>

        </v-col>
        <v-col cols="12" md="6">

          <v-card
          class="mx-auto mt-10"
          max-width="344"
          outlined
        >
          <v-list-item three-line>
            <v-list-item-content>
              <div class="text-center avatar__card">
                <v-avatar
                  size="100"
                  color="black"
                >
                  <img
                    src="https://scontent-vie1-1.xx.fbcdn.net/v/t1.0-9/119899914_10217644272169835_2683984069419703109_o.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeHvuZy9tIT-VnO1IVwd8o6FF6mKKOBxsggXqYoo4HGyCJmOi-aNASJ2gXR-jCkIxYA&_nc_ohc=XREUwx_BB_kAX8r2jcQ&_nc_ht=scontent-vie1-1.xx&oh=94e00e25a85157c2eaff374c70e705b0&oe=5FD26330"
                    alt="Igor Vukić"
                  >
                </v-avatar>
              </div>
              <div class="text-center">
                <v-list-item-title class="headline mb-1 mt-10">
                  Igor Vukić
                </v-list-item-title>
                <div class="overline mb-4">
                  Informatika FPMOZ
                </div>
              </div>
              <p class="font-weight-light" style="line-height: 1.3" align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu lectus id massa ullamcorper faucibus. 
                Nulla nec vehicula nisi, eget auctor erat. Sed auctor facilisis ipsum et vestibulum. 
                Donec vitae nulla suscipit nisl tempus blandit ut eu nisi. Duis sed dui velit. 
                Sed dictum pretium enim, sit amet malesuada ex interdum sed. 
                Proin tortor dolor, vehicula quis nulla ac, volutpat tincidunt nunc.</p>
            </v-list-item-content>
          </v-list-item>

          <v-card-actions class="d-flex justify-space-between">
            <div>
              <v-btn
                color="black"
                fab
                dark
              >
                <v-icon>mdi-github</v-icon>
              </v-btn>
              <v-btn
                color="blue"
                fab
                dark
              >
                <v-icon>mdi-linkedin</v-icon>
              </v-btn>
            </div>

            <div class="text-right">
              <v-btn
                rounded
                color="#1B4188"
                dark
                to="/kreatori/igor"
              >
                Više
              </v-btn>
            </div>
          </v-card-actions>
        </v-card>

        </v-col>
      </v-row>

      <!--Footer-->

    <v-footer
      class="mt-15"
      color="#1B4188"
      padless
    >
      <v-row
        justify="center"
        no-gutters
      >
        <v-btn
          v-for="link in links"
          :key="link"
          color="white"
          text
          rounded
          class="my-2"
        >
          {{ link }}
        </v-btn>
        <v-col
          cols="12"
          style="background: #2a60c4ad;"
        >
          <div style="color: white; text-align: center; padding: 15px;">
            {{ new Date().getFullYear() }} — <strong>CodeSUM</strong>
          </div>
        </v-col>
      </v-row>
    </v-footer>

        

    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue'
import Timeline from '../components/Timeline.vue';
export default {
  components:{
    Navbar,
    Timeline
  },
  data(){
    return{
      cards: [
        {
          dialog: false,
          image: 'https://iili.io/K3d1xn.png',
          name: 'Programiranje',
          description: 'Ovo je neki opis...',
          modal:{
            name: 'Ovo je naziv modala',
            description: 'Ovo je neki opis modala...'
          }
        },
        {
          dialog: false,
          image: 'https://iili.io/K3dlDX.png',
          name: 'Timski rad',
          description: 'Ovo je neki opis...',
          modal:{
            name: 'Ovo je naziv modala',
            description: 'Ovo je neki opis modala...'
          }
        },
        {
          dialog: false,
          image: 'https://iili.io/K3dcNt.png',
          name: 'Logičko razmišljanje',
          description: 'Ovo je neki opis...',
          modal:{
            name: 'Ovo je naziv modala',
            description: 'Ovo je neki opis modala...'
          }
        },
        {
          dialog: false,
          image: 'https://iili.io/K3daRI.png',
          name: 'Rješavanje problemskih zadataka',
          description: 'Ovo je neki opis...',
          modal:{
            name: 'Ovo je naziv modala',
            description: 'Ovo je neki opis modala...'
          }
        }
      ],

      items: [
        {
          color: '#1B4188',
          icon: 'mdi-star',
        },
        {
          color: '#1B4188',
          icon: 'mdi-book-variant',
        },
        {
          color: '#1B4188',
          icon: 'mdi-airballoon',
        },
        {
          color: '#1B4188',
          icon: 'mdi-buffer',
        },
      ],

      links: [
        'Naslovnica',
        'Tečajevi',
        'Postani član',
      ],

    }
  }
}
</script>

<style>
.avatar__card{
  position: absolute;
  top: -60px;
  left: 125px;
}
@media only screen and (max-width: 960px) {
  #landing-image{
    display: none;
  }
}
</style>