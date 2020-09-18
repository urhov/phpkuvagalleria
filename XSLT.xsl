<xsl:template match="/">
<html>
<body>
    <h2>elokuvakirjasto</h2>
    <table border="1">
        <tr bgcolor="#9acd32">
            <th>filename</th>
            <th>author</th>
            <th>date</th>
            <th>time</th>
        </tr>
        <xsl:for-each select="elokuvakirjasto/elokuva">
        <tr>
            <td><xsl:value-of select="filename"/></td>
            <td><xsl:value-of select="author"/></td>
            <td><xsl:value-of select="date"/></td>
            <td><xsl:value-of select="time"/></td>
        </tr>

        </xsl:for-each>
        </table>
</body>
</html>
</xsl:template> 

</xsl:stylesheet>