<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="application/json" />

<head>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
    <!-- <meta name="format-detection" content="telephone=no" /> -->
    <title>Neoxdev Getting Device ID</title>
    <meta name="description" content="Neoxdev Getting Device ID"
    />
    <!-- <link type="text/css" rel="stylesheet" media="all" href="css/style71ec.css" /><noscript><style type="text/css">.JS td,.JSh,.script{opacity:0.5}.js_hide_block{display:block}</style></noscript> -->
    <script>
        (function(){var a='.noscript,.ns{display:none!important}.script{opacity:1}',b=document.head||document.getElementsByTagName('head')[0],c=document.createElement('style');c.type='text/css';c.styleSheet?c.styleSheet.cssText=a:c.appendChild(document.createTextNode(a));b.appendChild(c)})();var glob=1019849692,ping="608765023"
    </script>
    <script src="<?php echo base_url() ?>assets/jquery1.12.4/jquery-1.12.4.min.js"></script>
    <style>
    	.webgl-table{
    		/*display: none;*/
    	}
    </style>
</head>
        <table class="webgl-table">
            <tr style="border-top:1px #fff solid">
                <td title="navigator.userAgent">Browser User-Agent</td>
                <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
            </tr>
        </table>

        <table class="webgl-table">
            <tr class="thead">
                <td colspan="2">
                    <h3>WebGL Support Detection</h3>
                </td>
            </tr>
            <tr>
                <td>This browser supports WebGL</td>
                <td id="webgl1-status"><span class="noscript"><span class="bad">&#215;</span> False (JavaScript disabled)</span>
                </td>
            </tr>
            <tr>
                <td style="height:18px">This browser supports WebGL 2</td>
                <td id="webgl2-status"><span class="noscript"><span class="bad">&#215;</span> False (JavaScript disabled)</span>
                </td>
            </tr>
            <tbody id="webgl2-tbody" class="n">
                <tr>
                    <td>gl.copyBufferSubData</td>
                    <td id="n0"></td>
                    <tr>
                        <td>gl.getBufferSubData</td>
                        <td id="n1"></td>
                        <tr>
                            <td>gl.blitFramebuffer</td>
                            <td id="n2"></td>
                            <tr>
                                <td>gl.framebufferTextureLayer</td>
                                <td id="n3"></td>
                                <tr>
                                    <td>gl.getInternalformatParameter</td>
                                    <td id="n4"></td>
                                    <tr>
                                        <td>gl.invalidateFramebuffer</td>
                                        <td id="n5"></td>
                                        <tr>
                                            <td>gl.invalidateSubFramebuffer</td>
                                            <td id="n6"></td>
                                            <tr>
                                                <td>gl.readBuffer</td>
                                                <td id="n7"></td>
                                                <tr>
                                                    <td>gl.renderbufferStorageMultisample</td>
                                                    <td id="n8"></td>
                                                    <tr>
                                                        <td>gl.texStorage2D</td>
                                                        <td id="n9"></td>
                                                        <tr>
                                                            <td>gl.texStorage3D</td>
                                                            <td id="n10"></td>
                                                            <tr>
                                                                <td>gl.texImage3D</td>
                                                                <td id="n11"></td>
                                                                <tr>
                                                                    <td>gl.texSubImage3D</td>
                                                                    <td id="n12"></td>
                                                                    <tr>
                                                                        <td>gl.copyTexSubImage3D</td>
                                                                        <td id="n13"></td>
                                                                        <tr>
                                                                            <td>gl.compressedTexImage3D</td>
                                                                            <td id="n14"></td>
                                                                            <tr>
                                                                                <td>gl.compressedTexSubImage3D</td>
                                                                                <td id="n15"></td>
                                                                                <tr>
                                                                                    <td>gl.getFragDataLocation</td>
                                                                                    <td id="n16"></td>
                                                                                    <tr>
                                                                                        <td>gl.uniform1ui</td>
                                                                                        <td id="n17"></td>
                                                                                        <tr>
                                                                                            <td>gl.uniform2ui</td>
                                                                                            <td id="n18"></td>
                                                                                            <tr>
                                                                                                <td>gl.uniform3ui</td>
                                                                                                <td id="n19"></td>
                                                                                                <tr>
                                                                                                    <td>gl.uniform4ui</td>
                                                                                                    <td id="n20"></td>
                                                                                                    <tr>
                                                                                                        <td>gl.uniform1uiv</td>
                                                                                                        <td id="n21"></td>
                                                                                                        <tr>
                                                                                                            <td>gl.uniform2uiv</td>
                                                                                                            <td id="n22"></td>
                                                                                                            <tr>
                                                                                                                <td>gl.uniform3uiv</td>
                                                                                                                <td id="n23"></td>
                                                                                                                <tr>
                                                                                                                    <td>gl.uniform4uiv</td>
                                                                                                                    <td id="n24"></td>
                                                                                                                    <tr>
                                                                                                                        <td>gl.uniformMatrix2x3fv</td>
                                                                                                                        <td id="n25"></td>
                                                                                                                        <tr>
                                                                                                                            <td>gl.uniformMatrix3x2fv</td>
                                                                                                                            <td id="n26"></td>
                                                                                                                            <tr>
                                                                                                                                <td>gl.uniformMatrix2x4fv</td>
                                                                                                                                <td id="n27"></td>
                                                                                                                                <tr>
                                                                                                                                    <td>gl.uniformMatrix4x2fv</td>
                                                                                                                                    <td id="n28"></td>
                                                                                                                                    <tr>
                                                                                                                                        <td>gl.uniformMatrix3x4fv</td>
                                                                                                                                        <td id="n29"></td>
                                                                                                                                        <tr>
                                                                                                                                            <td>gl.uniformMatrix4x3fv</td>
                                                                                                                                            <td id="n30"></td>
                                                                                                                                            <tr>
                                                                                                                                                <td>gl.vertexAttribI4i</td>
                                                                                                                                                <td id="n31"></td>
                                                                                                                                                <tr>
                                                                                                                                                    <td>gl.vertexAttribI4iv</td>
                                                                                                                                                    <td id="n32"></td>
                                                                                                                                                    <tr>
                                                                                                                                                        <td>gl.vertexAttribI4ui</td>
                                                                                                                                                        <td id="n33"></td>
                                                                                                                                                        <tr>
                                                                                                                                                            <td>gl.vertexAttribI4uiv</td>
                                                                                                                                                            <td id="n34"></td>
                                                                                                                                                            <tr>
                                                                                                                                                                <td>gl.vertexAttribIPointer</td>
                                                                                                                                                                <td id="n35"></td>
                                                                                                                                                                <tr>
                                                                                                                                                                    <td>gl.vertexAttribDivisor</td>
                                                                                                                                                                    <td id="n36"></td>
                                                                                                                                                                    <tr>
                                                                                                                                                                        <td>gl.drawArraysInstanced</td>
                                                                                                                                                                        <td id="n37"></td>
                                                                                                                                                                        <tr>
                                                                                                                                                                            <td>gl.drawElementsInstanced</td>
                                                                                                                                                                            <td id="n38"></td>
                                                                                                                                                                            <tr>
                                                                                                                                                                                <td>gl.drawRangeElements</td>
                                                                                                                                                                                <td id="n39"></td>
                                                                                                                                                                                <tr>
                                                                                                                                                                                    <td>gl.drawBuffers</td>
                                                                                                                                                                                    <td id="n40"></td>
                                                                                                                                                                                    <tr>
                                                                                                                                                                                        <td>gl.clearBufferiv</td>
                                                                                                                                                                                        <td id="n41"></td>
                                                                                                                                                                                        <tr>
                                                                                                                                                                                            <td>gl.clearBufferuiv</td>
                                                                                                                                                                                            <td id="n42"></td>
                                                                                                                                                                                            <tr>
                                                                                                                                                                                                <td>gl.clearBufferfv</td>
                                                                                                                                                                                                <td id="n43"></td>
                                                                                                                                                                                                <tr>
                                                                                                                                                                                                    <td>gl.clearBufferfi</td>
                                                                                                                                                                                                    <td id="n44"></td>
                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                        <td>gl.createQuery</td>
                                                                                                                                                                                                        <td id="n45"></td>
                                                                                                                                                                                                        <tr>
                                                                                                                                                                                                            <td>gl.deleteQuery</td>
                                                                                                                                                                                                            <td id="n46"></td>
                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                <td>gl.isQuery</td>
                                                                                                                                                                                                                <td id="n47"></td>
                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                    <td>gl.beginQuery</td>
                                                                                                                                                                                                                    <td id="n48"></td>
                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                        <td>gl.endQuery</td>
                                                                                                                                                                                                                        <td id="n49"></td>
                                                                                                                                                                                                                        <tr>
                                                                                                                                                                                                                            <td>gl.getQuery</td>
                                                                                                                                                                                                                            <td id="n50"></td>
                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                <td>gl.getQueryParameter</td>
                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                    id="n51"></td>
                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                        <td>gl.createSampler</td>
                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                            id="n52"></td>
                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                <td>gl.deleteSampler</td>
                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                    id="n53"></td>
                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                        <td>gl.isSampler</td>
                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                            id="n54"></td>
                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                <td>gl.bindSampler</td>
                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                    id="n55"></td>
                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                        <td>gl.samplerParameteri</td>
                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                            id="n56"></td>
                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                <td>gl.samplerParameterf</td>
                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                    id="n57"></td>
                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                        <td>gl.getSamplerParameter</td>
                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                            id="n58"></td>
                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                <td>gl.fenceSync</td>
                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                    id="n59"></td>
                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                        <td>gl.isSync</td>
                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                            id="n60"></td>
                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                <td>gl.deleteSync</td>
                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                    id="n61"></td>
                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                        <td>gl.clientWaitSync</td>
                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                            id="n62"></td>
                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                <td>gl.waitSync</td>
                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                    id="n63"></td>
                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                        <td>gl.getSyncParameter</td>
                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                            id="n64"></td>
                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                <td>gl.createTransformFeedback</td>
                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                    id="n65"></td>
                                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                                        <td>gl.deleteTransformFeedback</td>
                                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                                            id="n66"></td>
                                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                                <td>gl.isTransformFeedback</td>
                                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                                    id="n67"></td>
                                                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                                                        <td>gl.bindTransformFeedback</td>
                                                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                                                            id="n68"></td>
                                                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                                                <td>gl.beginTransformFeedback</td>
                                                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                                                    id="n69"></td>
                                                                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                                                                        <td>gl.endTransformFeedback</td>
                                                                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                                                                            id="n70"></td>
                                                                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                                                                <td>gl.transformFeedbackVaryings</td>
                                                                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                                                                    id="n71"></td>
                                                                                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                        <td>gl.getTransformFeedbackVarying</td>
                                                                                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                                                                                            id="n72"></td>
                                                                                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                <td>gl.pauseTransformFeedback</td>
                                                                                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                                                                                    id="n73"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                        <td>gl.resumeTransformFeedback</td>
                                                                                                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                                                                                                            id="n74"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                <td>gl.bindBufferBase</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                                                                                                    id="n75"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                        <td>gl.bindBufferRange</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                                                                                                                            id="n76"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                <td>gl.getIndexedParameter</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                                                                                                                    id="n77"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td>gl.getUniformIndices</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                                                                                                                                            id="n78"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td>gl.getActiveUniforms</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    id="n79"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td>gl.getUniformBlockIndex</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            id="n80"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td>gl.getActiveUniformBlockParameter</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    id="n81"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td>gl.getActiveUniformBlockName</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            id="n82"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td>gl.uniformBlockBinding</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    id="n83"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td>gl.createVertexArray</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            id="n84"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td>gl.deleteVertexArray</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    id="n85"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td>gl.isVertexArray</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            id="n86"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td>gl.bindVertexArray</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    id="n87"></td>
            </tbody>
        </table>
        <table id="webgl-table" class="webgl-table script">
            <tr class="thead">
                <td colspan="2">
                    <h3>WebGL Context Info</h3>
                </td>
            </tr>
            <tr>
                <td>Supported Context Name(s)</td>
                <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
            </tr>
            <tr>
                <td>Supported Context Name(s)</td>
                <td id="f_name"><em class="ns">{webgl2, experimental-webgl2, webgl, experimental-webgl, moz-webgl}</em></td>
            </tr>
            <tr>
                <td>GL Version</td>
                <td id="f0"><em class="ns">VERSION</em></td>
            </tr>
            <tr>
                <td>Shading Language Version</td>
                <td id="f1"><em class="ns">SHADING_LANGUAGE_VERSION</em></td>
            </tr>
            <tr>
                <td>Vendor</td>
                <td id="f2"><em class="ns">VENDOR</em></td>
            </tr>
            <tr>
                <td>Renderer</td>
                <td id="f3"><em class="ns">RENDERER</em></td>
            </tr>
            <tr>
                <td>Antialiasing</td>
                <td id="f_alias"><em class="ns">getContextAttributes().antialias</em></td>
            </tr>
            <tr>
                <td>ANGLE</td>
                <td id="f_angle"><em class="ns">Almost Native Graphics Layer Engine</em></td>
            </tr>
            <tr>
                <td>Major Performance Caveat</td>
                <td id="f_caveat"><em class="ns">failIfMajorPerformanceCaveat</em></td>
            </tr>
            <tr class="thead">
                <td colspan="2">
                    <h3>Debug Renderer Info</h3>
                </td>
            </tr>
            <tr>
                <td>Unmasked Vendor</td>
                <td id="u_vendor"><em class="ns">UNMASKED_VENDOR_WEBGL</em></td>
            </tr>
            <tr>
                <td>Unmasked Renderer</td>
                <td id="u_renderer"><em class="ns">UNMASKED_RENDERER_WEBGL</em></td>
            </tr>
            <tr class="thead">
                <td colspan="2">
                    <h3>WebGL Fingerprint</h3>
                </td>
            </tr>
            <tr>
                <td>WebGL Report Hash</td>
                <td id="webgl-fp-context"><em class="ns">n/a</em></td>
            </tr>
            <tr>
                <td>WebGL Image Hash</td>
                <td id="webgl-fp-img"><em class="ns">n/a</em></td>
            </tr>
            <tr>
                <td>WebGL Image</td>
                <td id="webgl-img"><em class="ns">n/a</em></td>
            </tr>
            <tr class="thead">
                <td colspan="2">
                    <h3>Vertex Shader</h3>
                </td>
            </tr>
            <tr>
                <td>Max Vertex Attributes</td>
                <td id="f4" title="Minimum: 8"><em class="ns">MAX_VERTEX_ATTRIBS</em></td>
            </tr>
            <tr>
                <td>Max Vertex Uniform Vectors</td>
                <td id="f5" title="Minimum: 128"><em class="ns">MAX_VERTEX_UNIFORM_VECTORS</em></td>
            </tr>
            <tr>
                <td>Max Vertex Texture Image Units</td>
                <td id="f6" title="Minimum: 0"><em class="ns">MAX_VERTEX_TEXTURE_IMAGE_UNITS</em></td>
            </tr>
            <tr>
                <td>Max Varying Vectors</td>
                <td id="f7" title="Minimum: 8"><em class="ns">MAX_VARYING_VECTORS</em></td>
            </tr>
            <tr>
                <td>Best Float Precision</td>
                <td id="f_vertext"><em class="ns">getShaderPrecisionFormat(VERTEX_SHADER)</em></td>
            </tr>
            <tbody class="w2">
                <tr>
                    <td>Max Vertex Uniform Components:</td>
                    <td id="f19"><em class="ns">MAX_VERTEX_UNIFORM_COMPONENTS</em></td>
                </tr>
                <tr>
                    <td>Max Vertex Uniform Blocks:</td>
                    <td id="f20"><em class="ns">MAX_VERTEX_UNIFORM_BLOCKS</em></td>
                </tr>
                <tr>
                    <td>Max Vertex Output Components:</td>
                    <td id="f21"><em class="ns">MAX_VERTEX_OUTPUT_COMPONENTS</em></td>
                </tr>
                <tr>
                    <td>Max Varying Components:</td>
                    <td id="f22"><em class="ns">MAX_VARYING_COMPONENTS</em></td>
                </tr>
                <tr class="thead">
                    <td colspan="2">
                        <h3>Transform Feedback</h3>
                    </td>
                </tr>
                <tr>
                    <td>Max Interleaved Components:</td>
                    <td id="f23"><em class="ns">MAX_TRANSFORM_FEEDBACK_INTERLEAVED_COMPONENTS</em></td>
                </tr>
                <tr>
                    <td>Max Separate Attribs:</td>
                    <td id="f24"><em class="ns">MAX_TRANSFORM_FEEDBACK_SEPARATE_ATTRIBS</em></td>
                </tr>
                <tr>
                    <td>Max Separate Components:</td>
                    <td id="f25"><em class="ns">MAX_TRANSFORM_FEEDBACK_SEPARATE_COMPONENTS</em></td>
                </tr>
            </tbody>
            <tr class="thead">
                <td colspan="2">
                    <h3>Rasterizer</h3>
                </td>
            </tr>
            <tr>
                <td>Aliased Line Width Range</td>
                <td id="f8" title="Minimum: [1, 1]"><em class="ns">ALIASED_LINE_WIDTH_RANGE</em></td>
            </tr>
            <tr>
                <td>Aliased Point Size Range</td>
                <td id="f9" title="Minimum: [1, 1]"><em class="ns">ALIASED_POINT_SIZE_RANGE</em></td>
            </tr>
            <tr class="thead">
                <td colspan="2">
                    <h3>Fragment Shader</h3>
                </td>
            </tr>
            <tr>
                <td>Max Fragment Uniform Vectors</td>
                <td id="f10" title="Minimum: 16"><em class="ns">MAX_FRAGMENT_UNIFORM_VECTORS</em></td>
            </tr>
            <tr>
                <td>Max Texture Image Units</td>
                <td id="f11" title="Minimum: 8"><em class="ns">MAX_TEXTURE_IMAGE_UNITS</em></td>
            </tr>
            <tr>
                <td>Float/Int Precision:</td>
                <td id="f_float_int"><em class="ns">getShaderPrecisionFormat(FRAGMENT_SHADER, HIGH_FLOAT/HIGH_INT)</em></td>
            </tr>
            <tr>
                <td>Best Float Precision</td>
                <td id="f_fragment"><em class="ns">getShaderPrecisionFormat(FRAGMENT_SHADER)</em></td>
            </tr>
            <tbody class="w2">
                <tr>
                    <td>Max Fragment Uniform Components:</td>
                    <td id="f26"><em class="ns">MAX_FRAGMENT_UNIFORM_COMPONENTS</em></td>
                </tr>
                <tr>
                    <td>Max Fragment Uniform Blocks:</td>
                    <td id="f27"><em class="ns">MAX_FRAGMENT_UNIFORM_BLOCKS</em></td>
                </tr>
                <tr>
                    <td>Max Fragment Input Components:</td>
                    <td id="f28"><em class="ns">MAX_FRAGMENT_INPUT_COMPONENTS</em></td>
                </tr>
                <tr>
                    <td>Min Program Texel Offset:</td>
                    <td id="f29"><em class="ns">MIN_PROGRAM_TEXEL_OFFSET</em></td>
                </tr>
                <tr>
                    <td>Max Program Texel Offset:</td>
                    <td id="f30"><em class="ns">MAX_PROGRAM_TEXEL_OFFSET</em></td>
                </tr>
            </tbody>
            <tr class="thead">
                <td colspan="2">
                    <h3>Framebuffer</h3>
                </td>
            </tr>
            <tbody class="w2">
                <tr>
                    <td>Max Draw Buffers:</td>
                    <td id="f31"><em class="ns">MAX_DRAW_BUFFERS</em></td>
                </tr>
                <tr>
                    <td>Max Color Attachments:</td>
                    <td id="f32"><em class="ns">MAX_COLOR_ATTACHMENTS</em></td>
                </tr>
                <tr>
                    <td>Max Samples:</td>
                    <td id="f33"><em class="ns">MAX_SAMPLES</em></td>
                </tr>
            </tbody>
            <tbody class="w1">
                <tr>
                    <td>Max Color Buffers:</td>
                    <td id="f_max_draw_buffers"><em class="ns">MAX_DRAW_BUFFERS_WEBGL</em></td>
                </tr>
            </tbody>
            <tr>
                <td>RGBA Bits</td>
                <td id="f12"><em class="ns">[RED_BITS, GREEN_BITS, BLUE_BITS, ALPHA_BITS]</em></td>
            </tr>
            <tr>
                <td>Depth / Stencil Bits:</td>
                <td id="f13"><em class="ns">[DEPTH_BITS, STENCIL_BITS]</em></td>
            </tr>
            <tr>
                <td>Max Render Buffer Size</td>
                <td id="f14"><em class="ns">MAX_RENDERBUFFER_SIZE</em></td>
            </tr>
            <tr>
                <td>Max Viewport Dimensions</td>
                <td id="f15"><em class="ns">MAX_VIEWPORT_DIMS</em></td>
            </tr>
            <tr class="thead">
                <td colspan="2">
                    <h3>Textures</h3>
                </td>
            </tr>
            <tr>
                <td>Max Texture Size</td>
                <td id="f16" title="Minimum: 64"><em class="ns">MAX_TEXTURE_SIZE</em></td>
            </tr>
            <tr>
                <td>Max Cube Map Texture Size</td>
                <td id="f17" title="Minimum: 16"><em class="ns">MAX_CUBE_MAP_TEXTURE_SIZE</em></td>
            </tr>
            <tr>
                <td>Max Combined Texture Image Units</td>
                <td id="f18" title="Minimum: 8"><em class="ns">MAX_COMBINED_TEXTURE_IMAGE_UNITS</em></td>
            </tr>
            <tr>
                <td>Max Anisotropy</td>
                <td id="f_anisotropy" title="Minimum: 2"><em class="ns">MAX_TEXTURE_MAX_ANISOTROPY_EXT</em></td>
            </tr>
            <tbody class="w2">
                <tr>
                    <td>Max 3D Texture Size:</td>
                    <td id="f34"><em class="ns">MAX_3D_TEXTURE_SIZE</em></td>
                </tr>
                <tr>
                    <td>Max Array Texture Layers:</td>
                    <td id="f35"><em class="ns">MAX_ARRAY_TEXTURE_LAYERS</em></td>
                </tr>
                <tr>
                    <td>Max Texture LOD Bias:</td>
                    <td id="f36"><em class="ns">MAX_TEXTURE_LOD_BIAS</em></td>
                </tr>
                <tr class="thead">
                    <td colspan="2">
                        <h3>Uniform Buffers</h3>
                    </td>
                </tr>
                <tr>
                    <td>Max Uniform Buffer Bindings:</td>
                    <td id="f37"><em class="ns">MAX_UNIFORM_BUFFER_BINDINGS</em></td>
                </tr>
                <tr>
                    <td>Max Uniform Block Size:</td>
                    <td id="f38"><em class="ns">MAX_UNIFORM_BLOCK_SIZE</em></td>
                </tr>
                <tr>
                    <td>Uniform Buffer Offset Alignment:</td>
                    <td id="f39"><em class="ns">UNIFORM_BUFFER_OFFSET_ALIGNMENT</em></td>
                </tr>
                <tr>
                    <td>Max Combined Uniform Blocks:</td>
                    <td id="f40"><em class="ns">MAX_COMBINED_UNIFORM_BLOCKS</em></td>
                </tr>
                <tr>
                    <td>Max Combined Vertex Uniform<br /> Components:</td>
                    <td id="f41"><em class="ns">MAX_COMBINED_VERTEX_UNIFORM_COMPONENTS</em></td>
                </tr>
                <tr>
                    <td style="white-space:pre-line">Max Combined Fragment Uniform<br /> Components:</td>
                    <td id="f42"><em class="ns">MAX_COMBINED_FRAGMENT_UNIFORM_COMPONENTS</em></td>
                </tr>
            </tbody>
            <tr class="thead">
                <td colspan="2">
                    <h3>WebGL Extensions</h3>
                </td>
            </tr>
            <tbody id="f_ext">
                <tr>
                    <td>Supported WebGL Extensions<br /> Supported Privileged Extensions</td>
                    <td rowspan="2" style="white-space:normal"><em class="ns">{OES_texture_float; OES_texture_half_float; WEBGL_lose_context; OES_standard_derivatives; OES_vertex_array_object; WEBGL_debug_renderer_info; WEBGL_debug_shaders; WEBGL_compressed_texture_s3tc; WEBGL_depth_texture; OES_element_index_uint; EXT_texture_filter_anisotropic; EXT_frag_depth; WEBGL_draw_buffers; ANGLE_instanced_arrays; OES_texture_float_linear; OES_texture_half_float_linear; EXT_blend_minmax; EXT_shader_texture_lod; WEBGL_compressed_texture_atc; WEBGL_compressed_texture_pvrtc; EXT_color_buffer_half_float; WEBGL_color_buffer_float; EXT_sRGB; WEBGL_compressed_texture_etc1; EXT_disjoint_timer_query; WEBGL_compressed_texture_etc; WEBGL_compressed_texture_astc; EXT_color_buffer_float; EXT_disjoint_timer_query_webgl2; WEBGL_shared_resources; WEBGL_security_sensitive_resources; OES_fbo_render_mipmap; WEBGL_compressed_texture_s3tc_srgb; WEBGL_get_buffer_sub_data_async; EXT_clip_cull_distance; EXT_float_blend; EXT_texture_storage; OES_EGL_image_external; WEBGL_debug; WEBGL_dynamic_texture; WEBGL_multiview; WEBGL_subarray_uploads; OES_depth24; WEBGL_debug_shader_precision; WEBGL_draw_elements_no_range_check; WEBGL_subscribe_uniform; WEBGL_texture_from_depth_video; WEBGL_compressed_texture_es3; WEBGL_compressed_texture_astc_ldr; EXT_draw_buffers}</em></td>
                </tr>
            </tbody>
        </table>

        <script>
        	<?php include 'js_cek_resolusi.php'; ?>
        </script>

    </div>
	        <!-- <span id="device_id_u"></span> -->
	    <style>
	    	.center_l{
	    		/*margin:0px auto;*/
	    		text-align: center;
	    	}
	    </style>
        <div class="center_l">
        	
	        <img height="50px" src="<?php echo base_url() ?>assets/img/loading_getting_device_id.svg" alt="">
	        <div>
	        	getting device id...
	        </div>

        </div>


        <script>
        	function this_finger(data){
        		// document.getElementById('device_id_u').innerHTML=data;
		          var data = 'device_id='+data;
		          var url = '<?php echo base_url() ?>auth/make_sess';
		          var type = 'POST';
		          $.ajax({
		              url: url,
		              type: type,
		              dataType: 'JSON',
		              data: data,
		              beforeSend: function() {
		                console.log(data);
		              },
		              success: function(data) {
		              	// location.reload();
		              	// alert('');
		              },
		              error: function() {
		                alert('error')
		              }
		          });
        	}
        </script>
</body>

</html>