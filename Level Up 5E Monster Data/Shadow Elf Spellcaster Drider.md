---
statblock: true
name: 'Shadow Elf Spellcaster Drider'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 6
ac: 17
hp: 114
hit_dice: '12d10 + 48'
speed: '30 ft., climb 30 ft.'
stats:
    - 18
    - 16
    - 18
    - 10
    - 16
    - 12
damage_resistances: poison
skillsaves:
    - { perception: 6 }
    - { stealth: 6 }
    - { survival: 6 }
senses: 'darkvision 120 ft., passive Perception 16'
languages: 'Undercommon, Elvish, one more'
traits:
    0: { name: 'Spider Climb', desc: 'The drider can use its climb speed even on difficult surfaces and upside down on ceilings.' }
    1: { name: 'Sunlight Sensitivity', desc: 'While in sunlight, the drider has disadvantage on attack rolls, as well as on Perception checks that rely on sight.' }
    2: { name: 'Web Walker', desc: 'The drider ignores movement restrictions imposed by webs.' }
    3: { name: 'Fey Ancestry', desc: "The drider gains an expertise die on saving throws against being charmed, and magic can't put it to sleep." }
    4: { name: 'Innate Spellcasting', desc: "The drider's innate spellcasting ability is Wisdom (spell save DC 14). The drider can innately cast the following spells, requiring no material components:" }
    traits: ['At will: dancing lights', '1/day each: darkness, web']
actions:
    - { name: Multiattack, desc: 'The drider makes a claws attack and then either a bite or longsword attack. Alternatively, it makes two longbow attacks.' }
    - { name: Claws, desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 15 (2d10 + 4) piercing damage, and the target is grappled (escape DC 15). While grappling a target, the drider can't attack a different target with its claws." }
    - { name: Bite, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one grappled creature. Hit: 2 (1d4) piercing damage plus 13 (3d8) poison damage.' }
    - { name: 'Longsword (wielded two-handed)', desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 9 (1d10 + 4) slashing damage.' }
    - { name: Longbow, desc: 'Melee Weapon Attack: +6 to hit, range 120/600 ft., one target. Hit: 7 (1d8 + 3) piercing damage plus 7 (2d6) poison damage.' }
    - { name: 'Darkness (2nd-Level; V, S, Concentration)', desc: "Magical darkness spreads from a point within 30 feet, filling a 15-foot-radius sphere and spreading around corners. It remains for 1 minute. A creature with darkvision can't see through this darkness and nonmagical light can't illuminate it." }
    - { name: 'Web (2nd-Level; V, S, Concentration)', desc: 'Thick, sticky webs fill a 20-foot cube within 60 feet, lightly obscuring it and making it difficult terrain. The webs must either be anchored between two solid masses (such as walls) or layered 5 feet deep over a flat surface. Each creature that starts its turn in the webs or that enters them during its turn makes a DC 14 Dexterity saving throw. On a failure, it is restrained. A creature can escape by using an action to make a DC 14 Strength check. Any 5-foot cube of webs exposed to fire burns away in 1 round, dealing 5 (2d4) fire damage to any creature that starts its turn in the fire. The webs remain for 1 minute.' }
combat:
    - { name: 'The drider attacks from hiding when it can', desc: "It starts combat by grappling a target with its claws. If successful, it bites; otherwise, it attacks with its longsword. It doesn't bite creatures it knows to be resistant to poison damage, such as other driders." }

---
```statblock
monster: Shadow Elf Spellcaster Drider
```
