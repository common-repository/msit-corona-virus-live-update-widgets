<div class="msit_container" style="background: <?php echo $instance['background_color'] ;?>">
    <div class="msit_top">
        <div class="msit_titleleft">
            <img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . '/images/virus-logo.png'; ?>" alt="MY SOFT IT Wordpress Plugin Development">
            <h2>
                <?php if($instance['title']){ ?>
                    <?php echo $instance['title'];?>
                <?php } ?>
                <span>latest update</span></h2>
        </div>
    </div>
    <div class="msit_contentdec">
        <table>
            <thead>
                <tr>
                    <th width="28%">#</th>
                    <th width="27%">Cases</th>
                    <th width="20%">Deaths</th>
                    <th width="25%">Recovered</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>World</td>
                    <td><?php echo Msit_Corona_Virus_updateWorld('cases'); ?></td>
                    <td><?php echo Msit_Corona_Virus_updateWorld('deaths'); ?></td>
                    <td><?php echo Msit_Corona_Virus_updateWorld('recovered'); ?></td>
                </tr>
            <?php if($instance['country']){ ?>
                <tr>
                    <td><?php echo $instance['country'];?></td>
                    <td><?php echo Msit_Corona_Virus_update('cases',$instance['country']); ?></td>
                    <td><?php echo Msit_Corona_Virus_update('deaths',$instance['country']); ?></td>
                    <td><?php echo Msit_Corona_Virus_update('recovered',$instance['country']); ?></td>
                </tr>
            <?php } ?>
            </tbody>
            <tfoot class="msit_tfoot" style="border-color: <?php echo $instance['background_color'] ;?>">
                <tr>
                    <td colspan="4" style="border-color: <?php echo $instance['background_color'] ;?>"><b>Data Source:</b> worldometers.info</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>