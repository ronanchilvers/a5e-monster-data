---
statblock: true
name: 'Bearded Devil'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fiend
cr: 3
ac: 13
hp: 52
hit_dice: '8d8 + 16'
speed: '30 ft.'
stats:
    - 16
    - 14
    - 14
    - 8
    - 12
    - 10
damage_resistances: 'cold; damage from nonmagical, non-silvered weapons'
damage_immunities: 'fire, poison'
condition_immunities: 'frightened, poisoned'
saves:
    - { strength: 5 }
    - { constitution: 4 }
    - { wisdom: 3 }
senses: 'darkvision 120 ft., passive Perception 11'
languages: 'Infernal, telepathy 120 ft.'
traits:
    - { name: "Devil's Sight", desc: "The devil's darkvision penetrates magical darkness." }
    - { name: 'Lawful Evil', desc: 'The devil radiates a Lawful and Evil aura.' }
    - { name: 'Magic Resistance', desc: 'The devil has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: Multiattack, desc: 'The devil attacks once with its beard and once with its glaive.' }
    - { name: Beard, desc: "Melee Weapon Attack: +5 to hit, reach 5 ft., one creature. Hit: 7 (1d8 + 3) piercing damage, and the target is poisoned until the end of the devil's next turn. While poisoned in this way, the target can't regain hit points." }
    - { name: Glaive, desc: 'Melee Weapon Attack: +5 to hit, reach 10 ft., one target. Hit: 8 (1d10 + 3) slashing damage. If the target is a creature other than an undead or construct, it makes a DC 12 Constitution saving throw. On a failure, it receives an infernal wound and takes 5 (1d10) ongoing slashing damage. Each time the devil hits the wounded target with this attack, the ongoing damage increases by 5 (1d10). A creature can spend an action to make a DC 12 Medicine check, ending the ongoing damage on a success. At least 1 hit point of magical healing also ends the ongoing damage.' }
combat:
    - { name: 'In melee combat, the bearded devil relies on its glaive, using its beard attacks to prevent its opponent from regaining hit points', desc: 'Large groups of bearded devils fight two ranks deep. Bearded devils have no ranged attacks and try to close to melee range as quickly as possible, using cover when possible. Bearded devils never flee while within sight of an ally; however, they may tactically retreat to defensible positions.' }

---
```statblock
monster: Bearded Devil
```
