
    // 用料
    $('#add-Material').click(function(){
        str = `
            <tr class="ng-scope">
                <td class="unit has-border">
                    <div class="placeholder ng-isolate-scope ng-pristine ng-valid">
                        <input name="food[]" class="input text layui-input" placeholder="食材：如鸡蛋" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 50px;" type="text">
                    </div>
                </td>
                <td class="unit has-border">
                    <div class="placeholder ng-isolate-scope ng-pristine ng-valid">
                        <input name="dosage[]" class="input text layui-input" placeholder="用量：如1只" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 50px;" type="text">
                    </div>
                </td>
                <td class="remove" title="删除用料" onclick="removeMaterial()">
                    <img  src="/home/recipe/images/close.png">
                </td>
            </tr>
            `;
        $('.ings tbody').append(str);
        trs = $('.ings .ng-scope');

    });

    function removeMaterial(){
        // console.log(trs);
        trs.each(function(i){
            $('.ings .ng-scope .remove').eq(i).click(function(){
                $(this).parents('.ng-scope').remove();
            })
        });
    }

    // 步骤
    $('#add-Step').click(function(){
        str = `
             <li class="step container ng-scope">
                <div class="text ml0" style="width: 95%;height: 100px">
                    <div class="placeholder ng-isolate-scope ng-pristine ng-valid" style="height: 100%;">
                        <textarea class="input text layui-input" placeholder="点击添加菜谱步骤" style="overflow: hidden; overflow-wrap: break-word; resize: none;width: 90%;height: 100%;" name="step[]"></textarea>
                    </div>
                </div>
                <div class="remove float-right" title="删除步骤" onclick="removeSep()">
                    <img src="/home/recipe/images/close.png">
                </div>
    
            </li>
            `;
        $('.steps ol').append(str);
        lis = $('.steps .ng-scope');

    });

    function removeSep(){
        // console.log(trs);
        lis.each(function(i){
            $('.steps .ng-scope .remove').eq(i).click(function(){
                $(this).parents('.ng-scope').remove();
            })
        });
    }




